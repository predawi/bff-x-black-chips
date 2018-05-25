import $ from 'jquery'
import '../vendor/jquery.fullpage'
import '../polyfill/forEach'

const resizeHeader = index => {
  const header = document.getElementById('header')
  if (index > 1) {
    if (header.classList.contains('affix')) {
      return false
    }
    header.classList.add('affix')
    document.body.classList.add('header-is-affix')
  } else {
    if (!header.classList.contains('affix')) {
      return false
    }
    header.classList.remove('affix')
    document.body.classList.remove('header-is-affix')
  }
}

const openSectionModal = e => {
  const id = e.target.dataset.target
  const modal = document.querySelector(`.section-modal[data-level="${id}"`)
  const footer = document.getElementById('footer')
  const paddingTop = document.getElementById('header').clientHeight
  modal.style.paddingTop = `${paddingTop}px`
  modal.style.zIndex = id
  modal.classList.add('open')
  document.body.classList.add('modal-open')
  modal.appendChild(footer)
  $.fn.fullpage.destroy()
}

$(document).ready(function() {
  const paddingTop = document.getElementById('header').clientHeight
  $('#fullpage').fullpage({
    sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
    scrollBar: true,
    fixedElements: '#header',
    scrollOverflow: true,
    paddingTop,
    onLeave: function(index, nextIndex, direction) {
      resizeHeader(nextIndex)
    },
  })
})

const btns = document.querySelectorAll('.section__cta')
;[].forEach.call(btns, btn => btn.addEventListener('click', openSectionModal))
