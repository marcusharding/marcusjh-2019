/*
  Automatically instantiates modules based on data-behaviours
  specifying module file-names.
*/

const behaviourElements = document.querySelectorAll('[data-behaviour]')

for (var i = 0; i < behaviourElements.length; i++) {
  const node = behaviourElements[i]
  const name = node.getAttribute('data-behaviour')
  const Behaviour = require(`./${name}`).default
  new Behaviour(node)
}

/*
  Usage:
  ======

  html
  ----
  <button data-behaviour="disappear">disappear!</button>

  js
  --
  // modules/disappear.js
  export default class Disappear {
    constructor(el) {
      el.style.display = 'none'
    }
  }
*/
