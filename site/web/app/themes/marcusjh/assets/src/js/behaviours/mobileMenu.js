function mobileMenu(node) {
  const el = node
  const siteNav = document.getElementById('siteNav')
  const burger = node.querySelector('button')
  el.onclick = () => {
    siteNav.classList.toggle('is-open')
    burger.classList.toggle('is-active')
  }
}

export default mobileMenu
