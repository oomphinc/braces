// Plugins
var gulp         = require('gulp'),
		watch        = require('gulp-watch'),
		sass         = require('gulp-ruby-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		plumber      = require('gulp-plumber'),
		gutil        = require('gulp-util'),
		rem          = require('gulp-pixrem'),
		compass      = require('gulp-compass');

gulp.task('compass', function() {
  gulp.src('sass/*.scss')
    .pipe(compass({
      config_file: 'config.rb',
      css: 'stylesheets',
      sass: 'sass',
      require: ['susy', 'breakpoint']
    }))
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .on('error', function(err) {
      // Would like to catch the error here
    })
    .pipe(gulp.dest('stylesheets'));
});

gulp.task('watch', function() {
    gulp.watch('sass/*.scss', ['compass']);
});

// Make all tasks run and then watch for the rest
gulp.task('default', ['compass', 'watch']);