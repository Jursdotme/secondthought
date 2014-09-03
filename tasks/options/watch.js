module.exports = {
  options: {
    livereload: true,
  },
  scripts: {
    files: ['javascripts/*.js'],
    tasks: ['jshint', 'concat', 'uglify'],
    options: {
      spawn: false,
    }
  },
  css: {
    files: ['sass/**/*.scss'],
    tasks: ['sass:dev', 'autoprefixer', 'cssmin', 'bless:dev'],
    options: {
      spawn: false,
    }
  }
}
