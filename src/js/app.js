/**
 * Main scripts file
 */
import './polyfill/picturefill'
import './polyfill/forEach'
import lazySizes from 'lazysizes'
import lazySizesBgset from 'lazysizes/plugins/bgset/ls.bgset'

import './src/menu'
import './src/button-href'
import './src/select'
import './src/seo'
import './src/scrollfire'
import AccessibilityTests from './src/accessibility-tests'

/**
 * LazySizes configuration
 * https://github.com/aFarkas/lazysizes/#js-api---options
 */
lazySizes.customMedia = {}

/**
 * LazySizesBgset configuration
 * https://github.com/aFarkas/lazysizes/tree/gh-pages/plugins/bgset#lazysizes-bgset-extension---responsive-background-images
 */
lazySizesBgset.customMedia = {}

/**
 * Dev mode only
 */
const distPath = window.location.pathname
if (distPath.match('/dist/').length === 1) {
  // a11y
  const accessibilityTests = new AccessibilityTests()
  accessibilityTests.init()
}
