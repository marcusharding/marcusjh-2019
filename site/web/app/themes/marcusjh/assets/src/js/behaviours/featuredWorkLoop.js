
function featuredWorkLoop(node) {
const el = node
const featuredProjects = el.children
const arr = [...featuredProjects]
let heroProjectIndex = 0

arr.forEach((project) => {
const currentIndex = project.dataset.index
const parsedIndex = parseInt(currentIndex)

if (parsedIndex === heroProjectIndex + 3) {
  heroProjectIndex += 3
}

if (parsedIndex === heroProjectIndex) {
  project.classList.remove('small-project__container')
  project.classList.add('hero-project__container')
} else {
  project.classList.remove('hero-project__container')
  project.classList.add('small-project__container')
}
})
}

export default featuredWorkLoop
