import 'superfish'

class Menu {
  constructor() {
    // Elements to handle toggle menu
    this.menuBody = document.body
    this.menu = document.querySelector('#menu')
    this.menuOpen = document.getElementById('js-menu-open')
    this.menuClose = document.getElementById('js-menu-close')
    this.buttonContainer = document.getElementById('js-menu-trigger')
    // Class
    this.activeClass = 'menu-mobile--active'
    // Resize breakpoint
    this.resizeBreakpoint = window.matchMedia('(min-width: 1024px)')
    this.openMenu = this.openMenu.bind(this)
    this.closeMenu = this.closeMenu.bind(this)
    this.menuResizing = this.menuResizing.bind(this)
    this.handleOutsideClick = this.handleOutsideClick.bind(this)
  }
  init() {
    if (!this.menu) {
      return false
    }
    this.menuOpen.addEventListener('click', this.openMenu)
    this.menuClose.addEventListener('click', this.closeMenu)
    document.addEventListener('click', this.handleOutsideClick)
    this.resizeBreakpoint.addListener(this.menuResizing)
  }
  /**
   * Close mobile menu if a click outside of it is detected
   * @param {event} e
   */
  handleOutsideClick(e) {
    const menu = this.menu.contains(e.target)
    const buttonContainer = this.buttonContainer.contains(e.target)
    if (!menu && !buttonContainer) {
      this.closeMenu()
    }
  }
  /**
   * Open menu
   * @param {event} e
   */
  openMenu(e) {
    if (!this.menuBody.classList.contains(this.activeClass)) {
      this.menuBody.classList.add(this.activeClass)
    }
  }
  /**
   * Close menu
   * @param {event} e
   */
  closeMenu(e) {
    if (this.menuBody.classList.contains(this.activeClass)) {
      this.menuBody.classList.remove(this.activeClass)
    }
  }
  /**
   * Remove menu-mobile active class if breakpoint reach desktop
   * @param {Object} mediaQuery
   */
  menuResizing(mediaQuery = this.resizeBreakpoint) {
    if (mediaQuery.matches && this.menuBody.classList) {
      this.menuBody.classList.remove(this.activeClass)
    }
  }
}

export default Menu

const menu = new Menu()
if (document.body.classList.contains('home')) {
  menu.init()
}
