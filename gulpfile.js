var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sass = require('gulp-sass')
var del = require('del');


var paths = {
  stylesheets: 'sass/style.scss',
  images: 'img/**/*',
  scripts: [
    'bower_components/matchHeight/jquery.matchHeight.js',
    'javascripts/scripts.js'
  ]
};

// Not all tasks need to use streams
// A gulpfile is just another node program and you can use all packages available on npm
gulp.task('clean', function(cb) {
  // You can use multiple globbing patterns as you would with `gulp.src`
  del(['build'], cb);
});

gulp.task('scripts', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src(paths.scripts)
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('javascripts/build/'));
});

gulp.task('sass', function () {
    return gulp.src(paths.stylesheets)
        .pipe(sass())
        .pipe(gulp.dest('stylesheets'));
});
