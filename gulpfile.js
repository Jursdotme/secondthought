var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sass = require('gulp-ruby-sass');
var bless = require('gulp-bless');
var cssmin = require('gulp-minify-css');
var prefix = require('gulp-autoprefixer');
var imagemin = require('gulp-imagemin');
var scsslint = require('gulp-scss-lint');
var del = require('del');


var paths = {
  sass: 'sass/**/*.scss',
  images: 'img/**/*',
  scripts: [
    'bower_components/matchHeight/jquery.matchHeight.js',
    'javascripts/scripts.js',
  ]
};

// Not all tasks need to use streams
// A gulpfile is just another node program and you can use all packages available on npm
gulp.task('clean', function(cb) {
  // You can use multiple globbing patterns as you would with `gulp.src`
  del(['build'], cb);
});

gulp.task('scss-lint', function() {
  return gulp.src(paths.sass)
    .pipe(scsslint({
        'config': 'scss-lint.yml',
      })
    );
});

gulp.task('scripts', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src(paths.scripts)
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('build/scripts'));
});

gulp.task('sass', function () {
    return gulp.src(paths.sass)
        .pipe(sass({sourcemap: true, sourcemapPath: '../../sass'}))
        .on('error', function (err) { console.log(err.message); })
        .pipe(prefix())
        .pipe(cssmin())
        .pipe(bless({ imports: true }))
        .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-dev', function () {
    return gulp.src(paths.sass)
        .pipe(sass({sourcemap: true, sourcemapPath: '../../sass'}))
        .on('error', function (err) { console.log(err.message); })
        .pipe(prefix())
        .pipe(gulp.dest('build/stylesheets'));
});

// Copy all static images
gulp.task('images', function() {
  return gulp.src(paths.images)
    // Pass in options to the task
    .pipe(imagemin({optimizationLevel: 5}))
    .pipe(gulp.dest('build/img'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
  gulp.watch(paths.scripts, ['scripts']);
  gulp.watch(paths.images, ['images']);
  gulp.watch(paths.sass, ['sass']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['watch', 'scripts', 'sass', 'images']);
