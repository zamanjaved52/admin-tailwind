const colors = require("tailwindcss/colors");
const aspectRatio = require("@tailwindcss/aspect-ratio");

module.exports = {
  content: ["src/**/*.{html,js}"],
  darkMode: "class",
  theme: {
    container: {
      center: true,
      padding: "1rem",
    },
    fontFamily: {
      body: ["Nunito Sans", "sans-serif"],
      heading: ["Nunito", "sans-serif"],
    },
    colors: {
      transparent: "transparent",
      black: colors.black,
      white: colors.white,
      primary: {
        DEFAULT: "#145388",
        100: "#F3F6F9",
        200: "#C4D4E1",
        300: "#A1BACF",
        400: "#5B87AC",
        500: "#145388",
        600: "#124B7A",
        700: "#0C3252",
        800: "#09253D",
        900: "#061929",
      },
      secondary: "#555555",
      gray: {
        100: "#f8f8f8",
        200: "#eeeeee",
        300: "#dddddd",
        400: "#cccccc",
        500: "#aaaaaa",
        600: "#888888",
        700: "#555555",
        800: "#242526",
        900: "#151515",
      },
    },
    extend: {
      fontSize: {
        "4xl": "2rem",
        "line-height": "3rem",
      },
      borderRadius: {
        xl: "10px",
      },
      boxShadow: {
        DEFAULT: "1px 1px 5px 0 rgba(0, 0, 0, 0.16)",
      },
      colors: {
        green: {
          ...colors.green,
          DEFAULT: "#28a745",
        },
        red: {
          ...colors.red,
          DEFAULT: "#dc3545",
        },
        yellow: {
          ...colors.yellow,
          DEFAULT: "#ffc107",
        },
        blue: {
          ...colors.blue,
          DEFAULT: "#17a2b8",
        },
        social: {
          facebook: "#3b5998",
          twitter: "#1da1f2",
          pinterest: "#bd081c",
          whatsapp: "#25d366",
        },
      },
      spacing: {
        "1/1": "100%",
        "3/4": "75%",
        "9/16": "56.25%",
      },
      animation: {
        "spin-slow": "spin 3s linear infinite",
      },
    },
  },
  plugins: [aspectRatio],
};
