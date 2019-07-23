// const BASE_FONT_SIZE = 16
// function px2rem(value, unit = 'rem') {
// 	let num = value

// 	if (typeof value === 'string') {
// 		num = stripUnits(value)
// 	}

// 	return `${(num / BASE_FONT_SIZE).toFixed(4)}${unit}`
// }

module.exports = {
  theme: {
    screens: {
		sm: '640px',
		md: '768px',
		lg: '1024px',
		xl: '1280px',
	  },
    fontFamily: {
			body: [
				'Circular-Book',
				'-apple-system',
				'BlinkMacSystemFont',
				'"Segoe UI"',
				'Roboto',
				'"Helvetica Neue"',
				'Arial'
			],
    extend: {}
  },
  fontSize: {
	'2xs': px2rem('10px'),
	xs: px2rem('12px'),
	sm: px2rem('14px'),
	base: px2rem('16px'),
	md: px2rem('19px'),
	lg: px2rem('22px'),
	xl: px2rem('25px'),
	'2xl': px2rem('35px'),
	'3xl': px2rem('47px'),
	'4xl': px2rem('80px')
},
  variants: {},
  plugins: []
  },
}
