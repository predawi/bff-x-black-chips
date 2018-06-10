import Barba from 'barba.js'

let lastElementClicked

const openMenu = e => {
  const me = document.querySelector('.me')
  me.classList.add('open')
  document.documentElement.classList.add('me-open')
}

document.getElementById('open-menu').addEventListener('click', openMenu)

Barba.Pjax.start()
Barba.Prefetch.init()

Barba.Dispatcher.on('linkClicked', function(el) {
  lastElementClicked = el
})

var FadeTransition = Barba.BaseTransition.extend({
  start: function() {
    /**
     * This function is automatically called as soon the Transition starts
     * this.newContainerLoading is a Promise for the loading of the new container
     * (Barba.js also comes with an handy Promise polyfill!)
     */

    // As soon the loading is finished and the old page is faded out, let's fade the new page
    this.el = lastElementClicked
    Promise.all([this.newContainerLoading, this.enlargeItems()]).then(this.showNewPage.bind(this))
  },

  enlargeItems: function() {
    var deferred = Barba.Utils.deferred()
    const navItems = document.querySelectorAll('.me li')
    for (let i = 0; i < navItems.length; i++) {
      const item = navItems[i]
      if (item !== this.el.parentNode) {
        item.classList.add('hide')
      }
      this.el.parentNode.classList.add('expand')
    }
    setTimeout(() => {
      const me = document.querySelector('.me')
      me.classList.remove('open')
      document.documentElement.classList.remove('me-open')
      window.scroll(0, 0)
      deferred.resolve()
    }, 1000)
    return deferred.promise
  },

  showNewPage: function() {
    this.newContainer.style.visibility = 'visible'
    this.done()
    document.getElementById('open-menu').addEventListener('click', openMenu)
  },
})

Barba.Pjax.getTransition = function() {
  return FadeTransition
}