# Braces

Braces is a starter theme that is meant for getting development teams up and running on WordPress projects quickly. Braces is derived from [Automattic _s project] (https://github.com/Automattic/_s). _s which is truly fantastic. As you'll likely notice, much of the core beliefs behind _s will be reflected in this project as well.

However, we did make some changes to suit our business needs, which we hope you'll find helpful as well. Some of the new features you can find are [Sass] (http://sass-lang.com) integration, file and structure clean up, and most noticeably, the PHP syntax. Typically any new additions should have README.md docs for their explanations.

Pull requests are welcome!

## Why Braces?

Braces alters the typical WP PHP loop syntax for a more [PHP coding standards] (http://make.wordpress.org/core/handbook/coding-standards/php/) friendly approach that uses more, well, "braces".

## Requirements

### Node ![Node](https://img.shields.io/badge/node-v0.0.0%2B-red.svg?style=flat-square "Node")
- Website: [node.js](http://nodejs.org)

### NPM - Node Package Manager ![NPM](https://img.shields.io/badge/npm-v0.0.0%2B-red.svg?style=flat-square "NPM")
- Website: [https://www.npmjs.com/package/npm](https://www.npmjs.com/package/npm)

### Sass ![Sass](https://img.shields.io/badge/sass-v0.0.0%2B-red.svg?style=flat-square "Sass")
- Website: [http://sass-lang.com/](http://sass-lang.com/)

### Gulp ![Gulp](https://img.shields.io/badge/gulp-v0.0.0%2B-red.svg?style=flat-square "Gulp")
- Website: [http://gulpjs.com/](http://gulpjs.com/)
- Resource: [Getting started with Gulp](travismaynard.com/writing/getting-started-with-gulp)

### Bourbon ![Bourbon](https://img.shields.io/badge/bourbon-v0.0.0%2B-red.svg?style=flat-square "Bourbon")
- Website: [http://bourbon.io/](http://bourbon.io/)
- Resource: [https://github.com/thoughtbot/neat#requirements](https://github.com/thoughtbot/neat#requirements)

### Neat ![Neat](https://img.shields.io/badge/neat-v0.0.0%2B-red.svg?style=flat-square "Neat")
- Website: [http://neat.bourbon.io/](http://neat.bourbon.io/)
- Resource: [https://github.com/thoughtbot/neat#using-neat](https://github.com/thoughtbot/neat#using-neat)

## Installation

Once you have installed all of the dependencies:
* run $ npm install = this will install the module dependancies listed in the build > package.json file
* a new folder called "node_modules" will be created in your theme folder
* run gulp from that directory

If you want to set things up manually, download `braces` from GitHub. The first thing you want to do is copy the `braces` directory and change the name to something else - Like, say, `megatherium` -- then you'll need to do a three-step find and replace on all of the templates.

* Search for: `* @author Oomph, Inc.` and replace with: `* @author { Your Company }`
* Search for: `* @link http://www.oomphinc.com` and replace with: `* @link { Your URL }`
* Search for: `braces` and replace with: `megatherium`

Don't forget to update the core style.css with your own information.
Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!