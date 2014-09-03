module.exports = {
  dev: {
    options: {
      // cssmin will minify later
      style: 'expanded',
      sourcemap: true,
    },
    files: {
      'stylesheets/build/global.raw.css': 'sass/style.scss'
    }
  }
}
