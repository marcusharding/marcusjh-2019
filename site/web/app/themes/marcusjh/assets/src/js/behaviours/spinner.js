function spinner(node) {
const video = document.getElementById('headerVideo')
const body = document.getElementById('mainBody')
const el = node
body.classList.remove('relative')
body.classList.add('fixed')

video.addEventListener('loadeddata', () => {
body.classList.remove('fixed')
body.classList.add('relative')
el.classList.add('hidden')
})
}

export default spinner
