import Menu from './menu'

class MenuAccordion extends Menu {
  constructor() {
    super()
    super.init()

    // CLass
    this.subMenu = 'sub-menu'
    this.subMenuToggle = `${this.subMenu}__toggle`
    this.subMenuVisible = `${this.subMenu}--visible`

    // Bind events
    this.toggleSubMenu = this.toggleSubMenu.bind(this)
    this.buildMobilePurpose = this.buildMobilePurpose.bind(this)
  }
  init() {
    this.resizeBreakpoint.addListener(this.buildMobilePurpose)
    this.buildMobilePurpose()
  }
  /**
   * Build or destroy accordion
   * @param {Object} mediaQuery
   */
  buildMobilePurpose(mediaQuery = this.resizeBreakpoint) {
    if (mediaQuery.matches) {
      this.destroy()
    } else {
      this.build()
    }
  }
  /**
   * Build mobile purpose
   */
  build() {
    const parents = this.menu.querySelectorAll('.menu-item-has-children')
    ;[].forEach.call(parents, parent => {
      const button = document.createElement('button')
      button.classList.add(this.subMenuToggle)
      button.type = 'button'
      button.innerHTML = '▼'
      parent.insertBefore(button, parent.firstChild)
      button.addEventListener('click', this.toggleSubMenu)
    })
  }
  /**
   * Destroy mobile purpose
   */
  destroy() {
    const parents = document.querySelectorAll('.menu-item-has-children')
    ;[].forEach.call(parents, parent => {
      const button = parent.querySelector(`.${this.subMenuToggle}`)
      const submenu = parent.querySelector(`.${this.subMenu}`)
      if (button) button.parentNode.removeChild(button)
      if (submenu) submenu.classList.remove(this.subMenuVisible)
    })
  }
  /**
   * Toggle sub menu
   * @param {Event} e
   */
  toggleSubMenu(e) {
    console.log(e)
    e.preventDefault()
    const target = e.currentTarget
    const parent = target.parentNode
    parent.querySelector(`.${this.subMenu}`).classList.toggle(this.subMenuVisible)
  }
}

export default MenuAccordion

const menu = new MenuAccordion()
if (document.body.classList.contains('page')) {
  menu.init()
}
