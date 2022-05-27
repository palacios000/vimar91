module.exports = {
  content: [
	'public/site/*.php',
	'public/site/templates/*.php',
	'public/site/templates/**/*.php',
	'public/site/templates/**/*.js',
  ],
  theme: {
    extend: {
      screens: {
        'sm': '640px',  
        'md': '1280px',
        'lg': '1440px',
      },
      colors:{
      },
    },
  },
  plugins: [ 
    require('@tailwindcss/typography'),
  ],
}
