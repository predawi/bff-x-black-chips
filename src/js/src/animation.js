import Barba from 'barba.js'

Barba.Pjax.start()
Barba.Prefetch.init()

const FadeTransition = Barba.BaseTransition.extend({
  start: () => {
    console.log('start')
    Promise.all([this.newContainerLoading, this.fadeOut()]).then(this.fadeIn.bind(this))
  },

  fadeOut: () => {
    console.log(this.oldContainer)
  },
  fadeIn: () => {},
})

Barba.Pjax.getTransition = function() {
  return FadeTransition
}
