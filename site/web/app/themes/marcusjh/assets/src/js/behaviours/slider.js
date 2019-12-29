import Glide, {
Controls,
Breakpoints,
Keyboard,
Swipe,
} from '@glidejs/glide/dist/glide.modular.esm'

function slider(node) {
let { options } = node.dataset

const defaultOptions = {
perView: 2,
}

try {
options = JSON.parse(options)
} catch {
options = {}
}

// @ts-ignore
const slide = new Glide(node, {
...defaultOptions,
...options,
})

    slide.mount({
 Controls, Breakpoints, Keyboard, Swipe,
})

return () => {
try {
slide.destroy()
} catch {
// console.log('scnharf')
}
}
}

export default slider
