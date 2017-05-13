// --------------
/*
  Author: Amin Meyghani
  Date: 10/26/2014
  Description: 
    Gulp task for compiling JS/Coffee files
*/
// --------------
var gulp = require('gulp');
var plugins     = require('gulp-load-plugins')({ camelize: true });
var browserSync = require('browser-sync');
var plumber     = require('gulp-plumber');
var config      = require("../gulp-config");
var reload      = browserSync.reload;

gulp.task('js-build', function() {
  gulp.src([
          // config.lib.location + '/underscore/underscore.js',
          // config.lib.location + "/angular/angular.js",
          config.lib.location + '/angular-truncate/index.js',
          config.lib.location + '/angular-smoothscroll/dist/scripts/bb15da28.scripts.js',
          config.js.src + '/main.js',
          config.js.src + '/mainModule.js'
   ])
    .pipe(plumber()) // prevent pipe from breaking on error.
    .pipe(plugins.uglify())
    .pipe(plugins.concat("all.min.js"))
    .pipe(plugins.rename(config.scripts.minFileRaw))
    .pipe(gulp.dest(config.global.buildLocation))
});