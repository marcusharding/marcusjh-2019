function homeLoading(node) {
const video = document.getElementById('headerVideo')
const body = document.getElementById('mainBody')
const delayInMilliseconds = 2000
// Local storage
const ls = window.localStorage
const myValue = ls.getItem('appLoaded')

const container = node.childNodes
body.classList.remove('relative')
body.classList.add('fixed')


  video.addEventListener('loadeddata', () => {
    setTimeout(() => {
      body.classList.remove('fixed')
      body.classList.add('relative')
      container[1].classList.add('isActive')
      // Set local storage state to true after loading splash screen has played once
      ls.setItem('appLoaded', true)
    }, delayInMilliseconds)
  })
}

export default homeLoading
