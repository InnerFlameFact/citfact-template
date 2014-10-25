var gulp = require('gulp');
var wrench = require('wrench');
var config = require('../config');

gulp.task('serve', [], function() {
  for (var i = config.citfactDepend.length - 1; i >= 0; i--) {
    copyDirSyncRecursive(
      config.bowerComponents + '/' + config.citfactDepend[i],
      config.citfactInstallDir + '/' + config.citfactDepend[i]
    );
  }

  function copyDirSyncRecursive(copyDir, newDir) {
    wrench.copyDirSyncRecursive(copyDir, newDir, {
      forceDelete: false,
      excludeHiddenUnix: false,
      preserveFiles: true,
      preserveTimestamps: true
    });
  }
});
