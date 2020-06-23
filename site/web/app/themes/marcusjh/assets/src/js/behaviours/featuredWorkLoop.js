
function featuredWorkLoop(node) {
const el = node
const featuredProjects = el.children
const arr = [...featuredProjects]

arr.forEach(project => console.log(project))

}

export default featuredWorkLoop
