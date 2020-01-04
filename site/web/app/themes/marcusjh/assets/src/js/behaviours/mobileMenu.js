function mobileMenu(node) {
  const el = node
  const siteNav = document.getElementById('siteNav')
  const burger = node.querySelector('button')
  const body = document.getElementById('mainBody')
  console.log(body)
  el.onclick = () => {
    siteNav.classList.toggle('is-open')
    burger.classList.toggle('is-active')
    body.classList.toggle('overflow-y-hidden')
  }
}

export default mobileMenu
