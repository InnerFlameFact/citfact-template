Backbone = require 'backbone'

# Creates a global `Application` object attached to the
module.exports = new
class Application extends Backbone.Marionette.Application
  version: 'v0.0.1'

  # Get the version of the application.
  #
  # Returns the version text {String}.
  getVersion: ->
    @version


