/* eslint-disable */

function siteHeader(node) {
    const el = node
    const logo = document.getElementById('logo')
    // const scrollPosY = window.pageYOffset | document.body.scrollTop


    function siteHeaderInit() {
    const scrollPosY = window.pageYOffset | document.body.scrollTop
    if (scrollPosY >= 100) {
        logo.classList.add('logo-on-scroll')
        el.classList.add('on-scroll')
    }

    if (scrollPosY === 0) {
        logo.classList.remove('logo-on-scroll')
        el.classList.remove('on-scroll')
    }
}

function throttled(delay, fn) {
    let lastCall = 0
    return function (...args) {
      const now = (new Date()).getTime()
      if (now - lastCall < delay) {
        return
      }
      lastCall = now
      return fn(...args)
    }
  }

  throttled(200, window.addEventListener('scroll', siteHeaderInit))
}

export default siteHeader
