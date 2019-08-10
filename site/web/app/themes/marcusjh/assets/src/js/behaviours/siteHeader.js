
function siteHeader(node) {
    const el = node
    let scrollPosY = window.pageYOffset | document.body.scrollTop
    console.log(scrollPosY)
    if (scrollPosY >= 100) {
        window.onscroll = () => {
            el.classList.add('on-scroll')
        }
    }
}

export default siteHeader
