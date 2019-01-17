/**
 * Relocat on desktop and mobile
 */

import $ from 'jquery'

// Relocate elements
if (!matchMedia('only screen and (min-width: 768px)').matches) {
  moveElementsMobile()
} else {
  moveElementsDesktop()
}

// If window resize
$(window).resize(function() {
  if (!matchMedia('only screen and (min-width: 768px)').matches) {
    moveElementsMobile()
  } else {
    moveElementsDesktop()
  }
})

function moveElementsMobile() {
  // $('el').insertAfter('el01')
}
function moveElementsDesktop() {
  // $('el').insertBefore('el01')
}
