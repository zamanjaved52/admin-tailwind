# Yeti Admin
**Yeti Admin** template is designed with simplicity in mind. All the pages and apps are well crafted to suit any **Admin** and **Web App** needs. All the JavaScript functions are well written in Vanilla JS. We have tried to minimize dependencies as much as possible. It is developed with one of the most popular css framework: Tailwind CSS (v3).

## General Features
- Dark Mode
- RTL Supported
- Modular and Minimal Design
- Multiple Layouts
- Custom UI Components
- Custom Applications
- Custom Pages
- Just use what you need (remove unwanted dependencies)

## Elements
- Dashboard
- Pages
	- Authentication
		- Login
		- Forgot Password
		- Register
	- Blog
		- List
		- List - Card Rows
		- List - Card Columns
		- Add Post
	- Errors
		- 403 Error
		- 404 Error
		- 500 Error
		- Under Maintenance
	- Pricing
	- FAQs - Layout 1
	- FAQs - Layout 2
	- Invoice
- Applications
	- Media Library
	- Point Of Sale
	- To Do
	- Chat
- UI
	- Form
		- Components
		- Input Groups
		- Layout
		- Validations
		- Wizards
	- Components
		- Alerts
		- Avatars
		- Badges
		- Buttons
		- Cards
		- Collapse
		- Dropdowns
		- Modal
		- Popovers & Tooltips
		- Tabs
		- Tables
		- Toasts
	- Extras
		- Carousel
		- Charts
		- Editors
		- Sortable
- Menu
	- Default
	- Icons Only
	- Wide
	- Hidden
- Blank Page

## What's used to develop this template?
- HTML
- CSS
- JS
- Tailwind CSS (v3)
- PostCSS
- Gulp

## Libraries
- Tippy.js
- Charts.js
- Glide.js
- SortableJS
- CKEditor
- Animate.css
- Line Awesome

## What's in the package?
* Design files (Designed using Adobe XD)
* Source and distribution files of the template

## Documentation
The searchable documentation for Yeti Admin is hosted at our [website](https://yetiadmin.yetithemes.net/docs).

## Browser Support
YetiAdmin supports all moderns browsers: **Chrome, Firefox, Safari** & **Edge**.

## Notes
- All the JavaScript functionality is written in Vanilla JavaScript. So, you can port them into any framework you want to use.
- Built in apps are for demonstration purposes. They may or may not have full functionality.
- We have an example for [Laravel Mix](https://yetiadmin.yetithemes.net/docs/docs/tools/#laravel-mix).

## Suggestions
We are open to any kind of suggestions. If you have any ideas that you want to see in the Yeti Admin, please let us know. We will do our best to improve the template based on your suggestions.

## Updates
We always try to keep up with updates on core & 3rd party libraries used.

## Credits
- Tailwind CSS
- Line Awesome
- Google Fonts

## File Structure
Within the download you'll find the following directory and file structure:
```
Design Files/
└── Yeti.xd

Site/
├── README.md
├── dist/ (Production Version)
│	├── assets/
│	│	├── css/
│	│	├── images/
│	│	├── fonts/
│	│	└── js/
│	├── index.html
│	└── ...
├── src/ (Development Version)
│	├── assets/
│	│	├── css/
│	│	├── images/
│	│	└── js/
│	├── partials/
│	│	├── _header.html
│	│	├── _footer.html
│	│	├── _navigation.html
│	│	└── ...
│	├── index.html
│	└── ...
├── package.json
├── tailwind.config.js
├── gulpfile.js
└── yarn.lock
```

## Installation
We are using gulp which allows to have complete automation for build flow.

### Prerequisites
Please install following prerequisites before setup:
- [Node.js](https://nodejs.org/)
- [Gulp & Gulp CLI](https://gulpjs.com/)
- [Yarn](https://yarnpkg.com/)

### Setup
Download the package. On `Site` directory:

``` shell
yarn
```

This will install all the node packages.

### Builds
You can run the following commands to build for development or production use. These commands outputs to `dist` directory.

#### Development
``` shell
yarn dev
```

#### Production
``` shell
yarn build
```
