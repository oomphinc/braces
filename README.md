# Braces

Braces is a starter theme that is meant for getting development teams up and running on WordPress projects quickly. Braces is derived from [Automattic _s project] (https://github.com/Automattic/_s). _s which is truly fantastic. As you'll likely notice, much of the core beliefs behind _s will be reflected in this project as well.

However, we did make some changes to suit our business needs, which we hope you'll find helpful as well. Some of the new features you can find are [Sass] (http://sass-lang.com) integration, file and structure clean up, and most noticeably, the PHP syntax. Typically any new additions should have README.md docs for their explanations.

Pull requests are welcome!

## Why Braces?

Braces alters the typical WP PHP loop syntax for a more [PHP coding standards] (http://make.wordpress.org/core/handbook/coding-standards/php/) friendly approach that uses more, well, "braces".

## Technologies

### Sass
Website: [http://sass-lang.com/](http://sass-lang.com/)

Configuration file can be found at:
* root > sass > styles.scss = order of files

### Gulp
Website: [http://gulpjs.com/](http://gulpjs.com/)

Configuration file can be found at:
* root > gulpfile.js = gulp functions
* root > package.json = module dependancy list

### Susy
Website: [http://susy.oddbird.net/](http://susy.oddbird.net/)

Configuration can be found at:
* root > sass > _grids.scss = grid configuration

### Compass
Website: [compass-style.org](compass-style.org)

Configuration can be found at:
* root > config.rb = compass configuration

## Support
This theme supports modern browsers - so IE9+. If you project requires IE8 support their are options availble to help with that.

[Modernizr.js](modernizr.com) is used for feature detection. It also ships with html5shiv.js which enables HTML5 elements in IE.

[Respond.js](https://github.com/scottjehl/Respond) is a library that allows IE6-8 to read media queries which is essential since we are using a grid system. This should only be loaded conditionally if you are trying to support those browsers.

[Pixrem](https://github.com/gummesson/gulp-pixrem) is a Gulp plugin that is used to convert REM units into pixels for IE fallbacks.

Getting Started
---------------

Since our theme uses Gulp, Compass, & Susy there is some initial configuartion that we have to process. Each of these will have to be installed on your system individually. In order to use these dependencies you will have to install [node.js](http://nodejs.org) on you system. This article is a great tutorial on how to get up and running quickly. [Getting started with Gulp](travismaynard.com/writing/getting-started-with-gulp)

Install Directions:
* cd into your theme directory
* run $ npm install = this will install the module dependancies listed in the root > package.json
* a new folder called "node_modules" will be created in your theme folder
* run compass install susy

If you want to set things up manually, download `braces` from GitHub. The first thing you want to do is copy the `braces` directory and change the name to something else - Like, say, `megatherium` -- then you'll need to do a three-step find and replace on all of the templates.

* Search for: `* @author Oomph, Inc.` and replace with: `* @author { Your Company }`
* Search for: `* @link http://www.oomphinc.com` and replace with: `* @link { Your URL }`
* Search for: `braces` and replace with: `megatherium`

Don't forget to update the core style.css with your own information.
Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!