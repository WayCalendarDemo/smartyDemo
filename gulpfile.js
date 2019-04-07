//gulpfile.js

// Files for sass
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');

//style paths for main website
var sassFiles = 'scss/*.scss',
    cssDest = 'doc_root/shared/css/';

gulp.task('styles', function () {
  gulp.src(sassFiles)
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 version'))
    .pipe(cleanCSS({compatibility: 'ie9'}))
    .pipe(gulp.dest(cssDest));
});

gulp.task('watch', function() {
  gulp.watch(sassFiles,['styles']);
});

//Files for js
// var gulp = require('gulp');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');

var jsFiles = 'sass/js/*.js',
    jsDest = 'web_root/js/';

gulp.task('min', function() {
  return gulp.src('sass/js/minify.js')
  .pipe(uglify())
  .pipe(rename('minify.min.js'))
  .pipe(gulp.dest('sass/js/'))
});

gulp.task('default', ['concat'], function(){});
