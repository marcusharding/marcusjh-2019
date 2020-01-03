
function bodyNoScroll(node) {
const el = node
const nav = document.getElementById('siteNav')

if (nav.classList.contains('is-open')) {
  console.log('true')
} else {
  console.log('false')
}

}

export default bodyNoScroll
