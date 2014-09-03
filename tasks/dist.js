module.exports = function(grunt) {
  grunt.registerTask('dist', [
    'sass:dev',
    'autoprefixer',
    'cssmin',
    'bless:dist',
    'jshint',
    'concat:dev',
    'uglify',
  ]);
};
