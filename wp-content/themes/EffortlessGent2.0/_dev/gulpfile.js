// --------------
/*
  Author: Neil Tan
  Description: 
    Gulpfile manifest file
*/
// --------------
var dir = require('require-dir');

// Load all the taks
dir('./gulp-tasks', { recurse: true });
