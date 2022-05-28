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
        'grigio-chiaro': '#C6C6C6',
      },
      spacing: {
        '17': '4.25rem',
        '23': '5.75rem',
        // Banner heights
        '15p': '15vh',
        '42p': '42.5vh',
        //Percentage spacing
        '5p': '5.23%',
        '6p': '6.64%',
        '77p': '77%',
      },
      fontSize: {
        '13pt': '0.65rem',
        '17pt': '75%',
        '21pt': '0.935rem',
        '36pt': '1.665rem',
        '50pt': ['2.25rem', '2rem'],
        // Percentage gets too big
        // '21pt': '116.8%',
        // '36pt': '208%',
        // '50pt': '281.25%',
      },
    },
  },
  plugins: [ 
    require('@tailwindcss/typography'),
  ],
}
