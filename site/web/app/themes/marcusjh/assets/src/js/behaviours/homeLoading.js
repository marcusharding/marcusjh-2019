function homeLoading(node) {
const video = document.getElementById('headerVideo')
const body = document.getElementById('mainBody')
const delayInMilliseconds = 2000
// const el = node
const container = node.childNodes
body.classList.remove('relative')
body.classList.add('fixed')


video.addEventListener('loadeddata', () => {
  setTimeout(() => {
    body.classList.remove('fixed')
    body.classList.add('relative')
    container[1].classList.add('isActive')
  }, delayInMilliseconds)
})
}

export default homeLoading
