import Menu from './menu'

class MenuDrilldown extends Menu {
  constructor() {
    super()
    super.init()

    // Elements
    this.menuList = this.menu.querySelector('.menu__list')
    this.level = 0

    // Class
    this.menuListActive = 'menu__list--drilldown'
    this.subMenu = 'sub-menu'
    this.subMenuDrilldown = 'sub-menu--drilldown'
    this.subMenuToggle = `${this.subMenu}__toggle`
    this.subMenuVisible = 'active'
    this.back = 'menu-item--back'

    // Bind events
    this.openDrilldown = this.openDrilldown.bind(this)
    this.closeDrilldown = this.closeDrilldown.bind(this)
    this.buildMobilePurpose = this.buildMobilePurpose.bind(this)
  }
  init() {
    this.resizeBreakpoint.addListener(this.buildMobilePurpose)
    this.buildMobilePurpose()
  }
  /**
   * Add drilldown class to submenus
   */
  flagMenuAsDrilldown() {
    this.menuList.classList.add(this.menuListActive)
    const submenus = this.menu.querySelectorAll(`.${this.subMenu}`)
    ;[].forEach.call(submenus, submenu => {
      submenu.classList.add(this.subMenuDrilldown)
      this.addBackButton(submenu)
    })
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
   * Destroy mobile purpose
   */
  destroy() {
    this.menuList.classList.remove(this.menuListActive)
    this.menuList.style.height = 'auto'
    const toggleButtons = document.querySelectorAll(`.${this.subMenuToggle}`)
    const backButtons = document.querySelectorAll(`.${this.back}`)
    const submenus = this.menu.querySelectorAll(`.${this.subMenu}`)
    ;[].forEach.call(toggleButtons, btn => btn.parentNode.removeChild(btn))
    ;[].forEach.call(backButtons, btn => btn.parentNode.removeChild(btn))
    ;[].forEach.call(submenus, submenu => submenu.classList.remove(this.subMenuDrilldown))
  }
  /**
   * Build mobile purpose
   */
  build() {
    this.flagMenuAsDrilldown()
    const parents = this.menu.querySelectorAll('.menu-item-has-children')
    ;[].forEach.call(parents, parent => {
      const button = document.createElement('button')
      button.classList.add(this.subMenuToggle)
      button.type = 'button'
      button.innerHTML = '►'
      parent.insertBefore(button, parent.firstChild)
      button.addEventListener('click', this.openDrilldown)
    })
  }
  openDrilldown(e) {
    this.level += 1
    const target = e.currentTarget
    const parent = target.parentNode
    // Set active class
    const activeSubmenu = parent.querySelector(`.${this.subMenu}`)
    activeSubmenu.classList.toggle(this.subMenuVisible)
    // Set height on parent element
    const height = activeSubmenu.clientHeight
    this.menuList.style.height = `${height}px`
  }
  closeDrilldown(e) {
    this.level -= 1
    const target = e.currentTarget
    const active = target.parentNode
    const height = active.parentNode.parentNode.clientHeight
    active.classList.remove(this.subMenuVisible)
    if (this.level < 1) {
      this.menuList.style.height = 'auto'
    } else {
      this.menuList.style.height = `${height}px`
    }
  }
  addBackButton(submenu) {
    const back = document.createElement('li')
    back.classList.add('menu-item', this.back)
    back.innerHTML = '<a href="#">◄ Retour</a>'
    submenu.insertBefore(back, submenu.firstChild)
    back.addEventListener('click', this.closeDrilldown)
  }
}

export default MenuDrilldown

const menu = new MenuDrilldown()
if (document.body.classList.contains('archive')) {
  menu.init()
}
