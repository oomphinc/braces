# Braces

Braces is a starter theme that is meant for getting development teams up and running on WordPress projects quickly. Braces is derived from [Automattic _s project] (https://github.com/Automattic/_s). _s which is truly fantastic. As you'll likely notice, much of the core beliefs behind _s will be reflected in this project as well.

However, we did make some changes to suit our business needs, which we hope you'll find helpful as well. Some of the new features you can find are [Sass] (http://sass-lang.com) integration, file and structure clean up, and most noticeably, the PHP syntax. Typically any new additions should have README.md docs for their explanations.

Pull requests are welcome!

## Why Braces?

Braces alters the typical WP PHP loop syntax for a more [PHP coding standards] (http://make.wordpress.org/core/handbook/coding-standards/php/) friendly approach that uses more, well, "braces".

## Requirements

### Node v0.10.26+
- Website: [node.js](http://nodejs.org)

### NPM - Node Package Manager v1.4.3+
- Website: [https://www.npmjs.com/package/npm](https://www.npmjs.com/package/npm)

### Sass v3.4.9+
- Website: [http://sass-lang.com/](http://sass-lang.com/)

### Gulp v3.8.10+
- Website: [http://gulpjs.com/](http://gulpjs.com/)
- Resource: [Getting started with Gulp](travismaynard.com/writing/getting-started-with-gulp)

### Bourbon v4.1.1+
- Website: [http://bourbon.io/](http://bourbon.io/)
- Resource: [https://github.com/thoughtbot/neat#requirements](https://github.com/thoughtbot/neat#requirements)

### Neat v1.7.0+
- Website: [http://neat.bourbon.io/](http://neat.bourbon.io/)
- Resource: [https://github.com/thoughtbot/neat#using-neat](https://github.com/thoughtbot/neat#using-neat)

## Installation

1. If you dont have them already on your system, install all required gems above
2. `cd` into `sass` directory run `bourbon install` run `neat install`
3. `cd` into `build` directory run `npm install`
4. run `gulp`

### Find & Replace

* Search for: `* @author Oomph, Inc.` and replace with: `* @author { Your Company }`
* Search for: `* @link http://www.oomphinc.com` and replace with: `* @link { Your URL }`
* Search for: `braces` and replace with: `yourthemedomain`

Don't forget to update the core style.css with your own information.
Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!