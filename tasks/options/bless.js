module.exports = {
  dist: {
    options: {banner: '/* this file has been blessed */'},
    files: {
      'stylesheets/global.css': 'stylesheets/build/global.min.css'
    }
  },
  dev: {
    options: {
      banner: '/* this file has been blessed */',
      cleanup: false
      },
    files: {
      'stylesheets/global.css': 'stylesheets/build/global.autoprefixed.css'
    }
  }
}
