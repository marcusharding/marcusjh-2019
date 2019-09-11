function requireAll(r) {
    r.keys().forEach(r)
  }
  
  requireAll(require.context('../src/svg/sprites/', true, /\.svg$/))