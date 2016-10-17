var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    del = require('del'),
    combineMq = require('gulp-combine-mq'),

    FtpDeploy = require('ftp-deploy'),
    ftpDeploy = new FtpDeploy();

var deploySettings = {
  username       : '',
  password       : '',
  host           : 'linux19.123hotel.dk',
  port           : 21,
  localRoot      : __dirname,
  remoteRoot     : "/www/wp-content/themes/THEMENAME/",
  exclude        : ['.git', '.idea', 'tmp/*', 'bower_components/*', 'node_modules/*', 'bower_components', 'node_modules']
}
var deploySettingsLite = {
  username       : '',
  password       : '',
  host           : 'linux19.123hotel.dk',
  port           : 21,
  localRoot      : __dirname + "/build",
  remoteRoot     : "/www/wp-content/themes/THEMENAME/build",
  exclude        : ['.git', '.idea', 'tmp/*', 'bower_components/*', 'node_modules/*', 'bower_components', 'node_modules']
}

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
    'bower_components/jquery.fitvids/jquery.fitvids.js',
  ],
  customscripts: [
    'javascripts/concat/*.js',
  ]
};

var scripts = paths.vendorscripts.concat(paths.customscripts);

gulp.task('scripts', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  // with sourcemaps all the way down
  return gulp.src(scripts)
    .pipe(concat('all.min.js'))
    .pipe(uglify())
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
  gulp.src('sass/style.scss')
    .pipe(sass({outputStyle: 'nested'}).on('error', function (err) { console.log(err.message); }))
    .pipe(sourcemaps.init())

    .pipe(autoprefixer({
			browsers: ['> 1%', 'last 10 ie versions'],
			cascade: false
		}))
    .pipe(cleanCSS({compatibility: '*'}))
    .pipe(combineMq({
        beautify: false
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-editor', function () {
  gulp.src('sass/editor.scss')
    .pipe(sass().on('error', function (err) { console.log(err.message); }))
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass-admin', function () {
  gulp.src('sass/admin.scss')
    .pipe(sass().on('error', function (err) { console.log(err.message); }))
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(gulp.dest('build/stylesheets'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
  gulp.watch(paths.customscripts, ['scripts']);
  gulp.watch(paths.sass, ['sass']);
});

gulp.task('watch-release', function() {
  gulp.watch(paths.customscripts, ['scripts']);
  gulp.watch(paths.sass, ['sass', 'sass-editor', 'sass-admin']);
});

gulp.task( 'deploy', function () {

  ftpDeploy.deploy(deploySettings, function(err) {
    if (err) console.log(err)
    else console.log("\n-==UPLOAD COMPLETED!==-");
  });

  ftpDeploy.on('uploading', function(data) {
    data.totalFileCount;       // total file count being transferred
    data.transferredFileCount; // number of files transferred
    data.percentComplete;      // percent as a number 1 - 100
    data.filename;             // partial path with filename being uploaded
  });

  ftpDeploy.on('uploaded', function(data) {
    //console.log(data.percentComplete);         // same data as uploading event
    process.stdout.write(data.transferredFileCount + " out of " + data.totalFileCount + " files uploaded (" + data.percentComplete + "%)\r");
  });

} );

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['scripts', 'sass-editor','sass-admin', 'sass', 'watch-release']);
gulp.task('release', ['scripts', 'sass-editor','sass-admin', 'sass', 'watch-release']);
