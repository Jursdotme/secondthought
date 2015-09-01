var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    bless = require('gulp-bless'),
    cssmin = require('gulp-minify-css'),
    autoprefixer = require('gulp-autoprefixer'),
    scsslint = require('gulp-scss-lint'),
    sourcemaps = require('gulp-sourcemaps'),
    del = require('del'),
    cache = require('gulp-cached'),
    stylestats = require('gulp-stylestats'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    header  = require('gulp-header'),
    rename = require('gulp-rename'),
    package = require('./package.json');

var paths = {
  sass: 'sass/**/*.scss',
  images: 'img/**/*',
  vendorscripts: [

    'bower_components/modernizr/modernizr.js',
    'bower_components/slick-carousel/slick/slick.js',
    'bower_components/matchHeight/jquery.matchHeight.js',
    'bower_components/fancybox/lib/jquery.mousewheel-3.0.6.pack.js',
    'bower_components/fancybox/source/jquery.fancybox.js',
    'bower_components/fancybox/source/helpers/jquery.fancybox-buttons.js',
    'bower_components/fancybox/source/helpers/jquery.fancybox-media.js',
    'bower_components/fancybox/source/helpers/jquery.fancybox-thumbs.js',
    'bower_components/stellar.js/jquery.stellar.min.js',
    'bower_components/fillerup/jquery.fillerup.js',
    'bower_components/throttle/src/js/throttle.js',
  ],
  customscripts: [
    'javascripts/concat/*.js',
  ]
};

var banner = [
  '/*\n' +
  ' Theme Name: <%= package.name %>\n' +
	' Theme URI: <%= package.url %>\n' +
	' Description: <%= package.title %>\n' +
	' Version: <%= package.version %>\n' +
	' Author: <%= package.author %>\n' +
	' Author URI: <%= package.repository %>\n' +
	' Tags: Blank, HTML5, CSS3\n' +
	' License: <%= package.license %>\n' +
  ' */',
  '\n'
].join('');

var scripts = paths.vendorscripts.concat(paths.customscripts);

gulp.task('header', function () {
    return gulp.src('style.css')
    .pipe(cssmin())
    .pipe(header(banner, { package : package }))
    .pipe(gulp.dest('./'));
});

// Not all tasks need to use streams
// A gulpfile is just another node program and you can use all packages available on npm
gulp.task('clean', function(cb) {
  // You can use multiple globbing patterns as you would with `gulp.src`
  del(['build'], cb);
});

gulp.task('clean-styles', function(cb) {
  // You can use multiple globbing patterns as you would with `gulp.src`
  del(['build/stylesheets'], cb);
});

gulp.task('clean-scripts', function(cb) {
  // You can use multiple globbing patterns as you would with `gulp.src`
  del(['build/scripts'], cb);
});

gulp.task('scripts-release', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src(scripts)
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('build/scripts'));
});

gulp.task('scripts', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src(scripts)
    .pipe(concat('all.min.js'))
    .pipe(gulp.dest('build/scripts'));
});

gulp.task('jshint', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src(paths.customscripts)
    .pipe(jshint())
    .pipe(jshint.reporter(stylish))
    .pipe(jshint.reporter('fail'));
});

gulp.task('scripts-admin', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src('javascripts/admin/theme-customizer.js')
  // .pipe(uglify())
  .pipe(gulp.dest('build/scripts'));
});

gulp.task('sass', function () {
  gulp.src('sass/style.scss')
    .pipe(sass().on('error', function (err) { console.log(err.message); }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-release', function () {
  gulp.src('sass/style.scss')
    .pipe(sass().on('error', function (err) { console.log(err.message); }))
    .pipe(autoprefixer())
    .pipe(cssmin())
    .pipe(bless({ imports: true }))
    .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-editor', function () {
  gulp.src('sass/editor.scss')
    .pipe(sass().on('error', function (err) { console.log(err.message); }))
    .pipe(autoprefixer())
    .pipe(cssmin())
    .pipe(bless({ imports: true }))
    .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-admin', function () {
  gulp.src('sass/admin.scss')
    .pipe(sass().on('error', function (err) { console.log(err.message); }))
    .pipe(autoprefixer())
    .pipe(cssmin())
    .pipe(bless({ imports: true }))
    .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('scss-lint', function() {
  return gulp.src('sass/**/*.scss')
    .pipe(scsslint({
      'config': 'lint.yml',
    })
  );
});

gulp.task('lint-watch', function() {
  gulp.watch('sass/**/*.scss', ['scss-lint']);
});

// Rerun the task when a file changes
gulp.task('watch', function() {
  gulp.watch(paths.customscripts, ['scripts']);
  gulp.watch(paths.sass, ['sass']);
});

gulp.task('watch-release', function() {
  gulp.watch(paths.customscripts, ['scripts-release']);
  gulp.watch(paths.sass, ['sass-release', 'sass-editor', 'sass-admin']);
});

// Rerun the task when a file changes
gulp.task('watch-admin', function() {
  gulp.watch(paths.customscripts, ['scripts-admin']);
  gulp.watch(paths.sass, ['sass-admin']);
});

gulp.task('stylestats', function () {
  return gulp.src('build/stylesheets/style.css')
    .pipe(stylestats());
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['scripts', 'sass', 'watch', 'jshint']);

gulp.task('admin', ['sass-admin', 'scripts-admin']);

gulp.task('editor', ['sass-editor']);

gulp.task('release', ['scripts-release', 'sass-editor','sass-admin', 'sass-release', 'watch-release']);

gulp.task('stats', ['sass-release', 'stylestats']);

gulp.task('test', ['jshint', 'scss-lint', 'sass-release', 'sass-editor', 'sass-admin', 'scripts-release']);
