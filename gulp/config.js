module.exports = {
  bowerComponents: 'vendor',
  citfactInstallDir: 'app',
  citfactDepend: [
    'citfact-news',
    'citfact-user'
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
      'vendor/angular/angular.js',
      'vendor/angular-route/angular-route.js',
      'vendor/angular-resource/angular-resource.js',
      'vendor/angular-ui-router/release/angular-ui-router.js',
    ],
    app: [
      'app/app.module.js',
      'app/**/*.js',
    ]
  }
};
