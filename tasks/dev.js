module.exports = function(grunt) {
  grunt.registerTask('dev', [
    'sass:dev',
    'autoprefixer',
    'bless',
    'jshint',
    'concat:dev',
    'uglify',
    'watch'
  ]);
};
