/**
 * Fix for IE
 */

import $ from 'jquery'

// Mitigate IE/Edge bug showing bullets on lists which are hidden when loading the page
$(document).ready(function() {
  setTimeout(() => {
    if (document.documentMode || /Edge/.test(navigator.userAgent)) {
      $('ul:hidden').each(function() {
        $(this)
          .parent()
          .append($(this).detach())
      })
    }
  }, 500)
})
