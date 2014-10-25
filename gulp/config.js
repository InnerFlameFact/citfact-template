module.exports = {
  bowerComponents: 'vendor',
  citfactInstallDir: 'app',
  citfactDepend: [
    'citfact-news'
  ],
  stylesheets: {
    vendor: [],
    app: [
      'stylesheets/bootstrap.less',
      'app/**/*.less'
    ],
  },
  javascript: {
    vendor: [
      'vendor/angular/angular.min.js',
      'vendor/angular-ui-router/release/angular-ui-router.min.js'
    ],
    app: [
      'app/app.module.js',
      'app/**/*.js',
    ]
  }
};
