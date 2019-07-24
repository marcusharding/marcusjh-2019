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
	  extend: {
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
		colors: {
			black: '#111517',
			// grey: {
			// 	100: '#f7fafc',
			// 	200: '#f2f2f2',
			// 	300: '#e1e1e1',
			// 	400: '#cbd5e0',
			// 	500: '#a0aec0',
			// 	600: '#718096',
			// 	700: '#4a5568',
			// 	800: '#2d3748',
			// 	900: '#1a202c'
			// },
		},	
		},
	},
  variants: {},
  plugins: [],
};
