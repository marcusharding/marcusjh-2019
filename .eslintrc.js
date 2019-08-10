module.exports = {
  env: {
    browser: true,
    es6: true,
  },
  extends: ['eslint:recommended', 'airbnb'],
  globals: {
    Atomics: 'readonly',
    SharedArrayBuffer: 'readonly',
  },
  parserOptions: {
    ecmaVersion: 6,
    sourceType: 'module',
  },
  parser: 'babel-eslint',
  rules: {
    semi: [2, 'never'],
    indent: 'off',
  },
}
