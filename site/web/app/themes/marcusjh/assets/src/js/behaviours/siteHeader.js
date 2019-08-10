
function siteHeader(node) {
    const el = node
    let scrollPosyY = window.scrollTop
    console.log(scrollPosyY)
    window.onscroll = () => {
        el.classList.add('on-scroll')
    }
}

export default siteHeader
