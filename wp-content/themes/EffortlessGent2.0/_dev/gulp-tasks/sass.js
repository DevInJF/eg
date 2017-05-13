// --------------
/*
  Author: Neil Tan
  Description: 
    Gulp SASS Task
*/
// --------------
var gulp        = require('gulp'),
    plugins     = require('gulp-load-plugins')({ camelize: true }),
    path        = require('path'),
    plumber     = require('gulp-plumber'), // handle error and "broken pipes"
    config      = require('../gulp-config'),
    browserSync = require('browser-sync'),
    reload      = browserSync.reload;
var minifyCSS = require('gulp-minify-css');

// SASS tasks
// ------
// wordpress sass dev
gulp.task('sass-dev',['copy-fonts-dev'], function () {
  gulp.src(config.sass.src)
    .pipe(plumber()) // prevent sass from breaking on error.
    // .pipe(plugins.sourcemaps.init())
    .pipe(plugins.sass())
    // .pipe(plugins.sourcemaps.write())
    .pipe(plugins.autoprefixer({
            browsers: config.autoprefixer.browsers,
            cascade: false
        }))
    .pipe(plugins.rename("style.css"))
    .pipe(gulp.dest(".."))
    .pipe(reload({stream:true}));
});

// wordpress sass build
gulp.task('sass-build', function () {
  gulp.src(config.sass.src)
    .pipe(plumber()) // prevent sass from breaking on error.
    .pipe(plugins.sass())
    .pipe(plugins.autoprefixer({
            browsers: config.autoprefixer.browsers,
            cascade: false
        }))
    .pipe(minifyCSS({noAdvanced: true}))
    .pipe(plugins.rename(config.sass.minFileNameRaw))
    .pipe(gulp.dest(config.global.buildLocation))
});