var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sass = require('gulp-ruby-sass');
var bless = require('gulp-bless');
var cssmin = require('gulp-minify-css');
var prefix = require('gulp-autoprefixer');
var scsslint = require('gulp-scss-lint');
var sourcemaps = require('gulp-sourcemaps');
var del = require('del');


var paths = {
  sass: 'sass/**/*.scss',
  images: 'img/**/*',
  scripts: [
    'bower_components/slick-carousel/slick/slick.js',
    'bower_components/matchHeight/jquery.matchHeight.js',
    'bower_components/fancybox/lib/jquery.mousewheel-3.0.6.pack.js',
    'bower_components/fancybox/source/jquery.fancybox.js',
    'bower_components/fancybox/source/helpers/jquery.fancybox-buttons.js',
    'bower_components/fancybox/source/helpers/jquery.fancybox-media.js',
    'bower_components/fancybox/source/helpers/jquery.fancybox-thumbs.js',
    'bower_components/conditionizr/src/conditionizr.js',
    // 'bower_components/modernizr/modernizr.js',
    'javascripts/concat/*.js',
  ]
};

// Not all tasks need to use streams
// A gulpfile is just another node program and you can use all packages available on npm
gulp.task('clean', function(cb) {
  // You can use multiple globbing patterns as you would with `gulp.src`
  del(['build'], cb);
});

gulp.task('scripts-release', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src(paths.scripts)
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('build/scripts'));
});

gulp.task('scripts', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src(paths.scripts)
    .pipe(concat('all.min.js'))
    .pipe(gulp.dest('build/scripts'));
});

gulp.task('scripts-admin', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src('javascripts/admin/theme-customizer.js')
  // .pipe(uglify())
  .pipe(gulp.dest('build/scripts'));
});

gulp.task('sass', function () {
    return gulp.src('sass/style.scss')
        .pipe(sass({ "sourcemap=none": true }))
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-editor', function () {
    return gulp.src('sass/editor.scss')
        .pipe(sass({ "sourcemap=none": true }))
        .on('error', function (err) { console.log(err.message); })
        .pipe(prefix())
        .pipe(cssmin())
        .pipe(bless({ imports: true }))
        .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-admin', function () {
    return gulp.src('sass/admin.scss')
        .pipe(sass({ "sourcemap=none": true }))
        .on('error', function (err) { console.log(err.message); })
        .pipe(prefix())
        .pipe(cssmin())
        .pipe(bless({ imports: true }))
        .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-release', function () {
  return gulp.src('sass/*.scss')
    .pipe(sass({ "sourcemap=none": true }))
    .on('error', function (err) { console.log(err.message); })
    .pipe(prefix())
    .pipe(cssmin())
    .pipe(bless({ imports: true }))
    .pipe(gulp.dest('build/stylesheets'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
  gulp.watch(paths.scripts, ['scripts']);
  gulp.watch(paths.sass, ['sass']);
});

// Rerun the task when a file changes
gulp.task('watch-admin', function() {
  gulp.watch(paths.scripts, ['scripts-admin']);
  gulp.watch(paths.sass, ['sass-admin']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['scripts', 'sass', 'watch']);

gulp.task('admin', ['sass-admin', 'scripts-admin']);

gulp.task('editor', ['sass-editor']);

gulp.task('release', ['scripts-release', 'sass-release']);
