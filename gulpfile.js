// Plugins
var gulp         = require('gulp');
var watch        = require('gulp-watch');
var sass         = require('gulp-ruby-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber      = require('gulp-plumber');
var gutil        = require('gulp-util');
var rem          = require('gulp-pixrem');

gulp.task('styles', function() {
  gulp.src('sass/*.scss')
    .pipe(sass({style: 'compressed'}))
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .on('error', function(err) {
      // Would like to catch the error here
    })
    .pipe(gulp.dest('theme/css'));
});

gulp.task('watch', function() {
    gulp.watch('sass/*.scss', ['styles']);
});

// Make all tasks run and then watch for the rest
gulp.task('default', ['styles', 'watch']);