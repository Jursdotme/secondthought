var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

gulp.task('scripts', function() {
  gulp.src('javascripts/scripts.js')
  .pipe(concat(''))
  .pipe(uglify())
  .pipe(gulp.dest('javascripts/build/'))
});
