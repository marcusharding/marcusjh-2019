import './behaviours'

function requireAll(r) {
  r.keys().forEach(r)
}

requireAll(require.context('../svg/sprites/', true, /\.svg$/))
