# Load dependencies
window.$ = window.jQuery = $ = require 'jquery'
Backbone = require 'backbone'
Backbone.$ = $
Backbone.Marionette = require 'backbone.marionette'

# Load bootstrap plugins
require './transition.js'
require './alert.js'
require './button.js'
require './carousel.js'
require './collapse.js'
require './dropdown.js'
require './modal.js'
require './tooltip.js'
require './popover.js'
require './scrollspy.js'
require './tab.js'
require './affix.js'

# Load backbone modules
require './modules/smart-filter'

# Creates global `Application` object
window.Application = require './application'
