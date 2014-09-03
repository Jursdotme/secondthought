module.exports = {
  options: {
    browsers: ['last 2 version', 'ie 8', 'ie 9'],
  },
  // prefix the specified file
  single_file: {
    options: {
      // Target-specific options go here.
    },
    src: 'stylesheets/build/global.raw.css',
    dest: 'stylesheets/build/global.autoprefixed.css'
  },
}
