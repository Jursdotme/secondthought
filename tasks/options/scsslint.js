module.exports = {
  allFiles: [
      'sass/*.scss',
      'sass/base/**/*.scss',
      'sass/components/**/*.scss',
      'sass/helpers/*.scss',
      'sass/layout/**/*.scss',
      'sass/pages/**/*.scss',
      // 'sass/themes/**/*.scss',
      // 'sass/vendors/**/*.scss',
      // 'sass/woocommerce/**/*.scss',
    ],
    options: {
      reporterOutput: 'scss-lint-report.xml',
      config: 'sasslintconfig.yml',
      colorizeOutput: true
    },
}
