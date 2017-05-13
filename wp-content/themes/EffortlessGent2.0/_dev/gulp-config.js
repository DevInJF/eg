// --------------
/*
  Author: Neil Tan
  Description: 
    Gulp config file
*/
// --------------
var assetRoot = "." + "/";
var path = require('path');
var gulp = require('gulp');
var date = new Date();
var time = date.getHours() + "" + date.getMinutes() + "" + date.getSeconds();

module.exports = {
	browserSync: {
    proxy: "http://localhost:8888/eg",
		logLevel: "debug"
	},
  global: {
    assetRoot : assetRoot,
    buildFolder: "_build",
    buildLocation: "../_build"
  },
  lib: {
    assetRoot: assetRoot,
    location: path.join(assetRoot, 'lib'),
  },
  scripts: {
    assetRoot: assetRoot,
    outputName: "eg.js",
    outputDestination: path.join(assetRoot, 'js'),
    minFileName: "eg.min" + time + ".js",
    minFileRaw: "eg.min.js"
  },
  js: {
    assetRoot: assetRoot,
    src: path.join(assetRoot, 'js-src'),
    allSrc: path.join(assetRoot, 'js-src/**/*.js')
  },
  coffee: {
    assetRoot: assetRoot,
    src: path.join(assetRoot, 'coffee/main.coffee'),
    allSrc: path.join(assetRoot, 'coffee/**/*.coffee')

  },
  sass: {
    assetRoot: assetRoot,
    src: path.join(assetRoot, 'sass/main.scss'),
    allSrc: path.join(assetRoot, 'sass/**/*.scss'),
    destination: path.join(assetRoot),
    minFileName: "eg.min" + time + ".css",
    minFileNameRaw: "eg.min.css",
    devFileName: "eg.css"
  },
  less: {
    assetRoot: assetRoot,
    src: path.join(assetRoot, 'less/main.less'),
    allSrc: path.join(assetRoot, 'less/**/*.less'),
    destination: path.join(assetRoot, 'css'),
    minFileName: "eg.min.css",
    devFileName: "eg.css"
  },
  autoprefixer: {
    browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'firefox < 30']
  }

};