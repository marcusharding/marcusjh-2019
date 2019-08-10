

function mobileMenu(node) {
  const el = node
  const siteNav = document.getElementById('site-nav')
  const burger = node.querySelector('button')
  el.onclick = () => {
    siteNav.classList.toggle('is-open')
    burger.classList.toggle('is-active')
  }
}

export default mobileMenu
