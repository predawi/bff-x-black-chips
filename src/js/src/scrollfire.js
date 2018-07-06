import imagesLoaded from 'imagesloaded'
import inView from 'in-view'

class ScrollFire {
  constructor() {
    this.el = '[data-aos]'
    this.threshold = 0.5

    this.init()
  }

  init() {
    inView.threshold(this.threshold)
    this.checkImagesLoaded()
    inView(this.el).on('enter', el => {
      if (el.classList.contains('lazyload') || el.classList.contains('lazyloading')) {
        return false
      }
      const delay = el.dataset.aosDelay
      const duration = el.dataset.aosDuration
      el.style.transitionDelay = `${delay}ms`
      el.style.transitionDuration = `${duration}ms`
      el.classList.add('done')
    })
  }

  checkImagesLoaded() {
    const images = document.querySelectorAll('img[data-aos]')
    ;[].forEach.call(images, image => {
      imagesLoaded(image).on('progress', (instance, objImg) => {
        const img = objImg.img
        const isInView = inView.is(img)
        if (isInView) {
          inView('img').emit('enter', img)
        }
      })
    })
  }
}

new ScrollFire()

export default ScrollFire