const { src, dest, series, parallel, watch } = require("gulp");

const concat = require("gulp-concat");
const del = require("del");
const { pipeline } = require("readable-stream");

const fileinclude = require("gulp-file-include");

const sourcemaps = require("gulp-sourcemaps");

const postcss = require("gulp-postcss");
const postcssImport = require("postcss-import");
const tailwindcssNesting = require("tailwindcss/nesting");
const tailwindcss = require("tailwindcss");
const postcssCustomProperties = require("postcss-custom-properties");
const autoprefixer = require("autoprefixer");
const cleanCSS = require("gulp-clean-css");

const uglify = require("gulp-uglify-es").default;

const browserSync = require("browser-sync").create();

// Paths
const paths = {
  src: "src/",
  dest: "dist/",
  html: {
    src: "src/**/*.html",
    dest: "dist/",
  },
  css: {
    src: "src/assets/css/",
    dest: "dist/assets/css/",
  },
  js: {
    src: "src/assets/js/**/*.js",
    dest: "dist/assets/js/",
  },
  images: {
    src: "src/assets/images/**/*",
    dest: "dist/assets/images/",
  },
  fonts: {
    src: "src/assets/fonts/**/*",
    dest: "dist/assets/fonts/",
  },
};

// HTML
const html = () => {
  return src([paths.html.src, "!src/partials/**/*.html"])
    .pipe(
      fileinclude({
        prefix: "@@",
        basepath: "@file",
        indent: true,
      })
    )
    .pipe(dest(paths.html.dest))
    .pipe(browserSync.stream());
};

// CSS
const css = () => {
  return src(paths.css.src + "style.css")
    .pipe(sourcemaps.init())
    .pipe(
      postcss([
        postcssImport(),
        tailwindcssNesting(),
        tailwindcss(),
        postcssCustomProperties(),
        autoprefixer(),
      ])
    )
    .pipe(concat("style.css"))
    .pipe(sourcemaps.write("."))
    .pipe(dest(paths.css.dest))
    .pipe(browserSync.stream());
};

// CSS Production
const cssProd = () => {
  return src(paths.css.src + "style.css")
    .pipe(
      postcss([
        postcssImport(),
        tailwindcssNesting(),
        tailwindcss(),
        postcssCustomProperties(),
        autoprefixer(),
      ])
    )
    .pipe(concat("style.css"))
    .pipe(cleanCSS())
    .pipe(dest(paths.css.dest));
};

// JS
const js = () => {
  return src(paths.js.src)
    .pipe(sourcemaps.init())
    .pipe(concat("script.js"))
    .pipe(sourcemaps.write("."))
    .pipe(dest(paths.js.dest))
    .pipe(browserSync.stream());
};

// JS Production
const jsProd = () => {
  return pipeline(
    src(paths.js.src).pipe(concat("script.js")),
    uglify(),
    dest(paths.js.dest)
  );
};

// Vendor
const vendor = () => {
  // Line Awesome (Copy Fonts)
  const lineAwesome = () =>
    src("node_modules/line-awesome/dist/line-awesome/fonts/**/*").pipe(
      dest(paths.fonts.dest)
    );

  // Vendor Js
  const vendorJs = () =>
    src([
      // Tippy.js
      "node_modules/@popperjs/core/dist/umd/popper.min.js",
      "node_modules/tippy.js/dist/tippy.umd.min.js",
    ])
      .pipe(concat("vendor.js"))
      .pipe(dest(paths.js.dest));

  return lineAwesome(), vendorJs();
};

// Vendor Extras
const vendorExtras = (isDev) => {
  const vendorExtrasJs = () =>
    src([
      // Chart.js
      "node_modules/chart.js/dist/chart.min.js",
      // Sortable.js
      "node_modules/sortablejs/Sortable.min.js",
      // Glide.js
      "node_modules/@glidejs/glide/dist/glide.min.js",
      // CKEditor
      "node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js",
    ]).pipe(dest(paths.js.dest));

  const vendorExtrasJsDev = () =>
    src([
      // CKEditor
      "node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js.map",
      // Tippy.js
      "node_modules/tippy.js/dist/tippy.umd.min.js.map",
    ]).pipe(dest(paths.js.dest));

  if (isDev) {
    return vendorExtrasJs(), vendorExtrasJsDev();
  } else {
    return vendorExtrasJs();
  }
};

const vendorExtrasDev = () => {
  return vendorExtras(true);
};

const vendorExtrasProd = () => {
  return vendorExtras();
};

// Images
const images = () => {
  return src(paths.images.src)
    .pipe(dest(paths.images.dest))
    .pipe(browserSync.stream());
};

// Fonts
const fonts = () => {
  return src(paths.fonts.src)
    .pipe(dest(paths.fonts.dest))
    .pipe(browserSync.stream());
};

// Clean
const clean = () => {
  console.log("Cleaning dist folder for fresh start.");
  return del(paths.dest);
};

// Live Server
const liveServer = () => {
  browserSync.init({
    server: {
      baseDir: paths.dest,
    },
    notify: false,
  });
};

// Watch Files
const watchFiles = () => {
  liveServer();

  watch(paths.html.src, series(html));
  watch([paths.css.src, "tailwind.config.js"], series(css));
  watch(paths.js.src, series(js));
  watch(paths.images.src, series(images));
  watch(paths.fonts.src, series(fonts));
};

// Development
exports.default = series(
  clean,
  parallel(html, css, js, vendor, vendorExtrasDev, images, fonts),
  watchFiles
);

// Production
exports.build = series(
  clean,
  parallel(html, cssProd, jsProd, vendor, vendorExtrasProd, images, fonts)
);
