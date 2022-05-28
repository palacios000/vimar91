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
        'grigio-footer': '#EDEDED',
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
        '2vh': '2vh',
        '2.25vh': '2.25vh',
        '2.5vh': '2.5vh',
        '2.75vh': '2.75vh',
        '3vh': '3vh',
        '4vh': '4vh',
        '5vh': '5vh',
        '6vh': '6vh',
        '7vh': '7vh',
        '8vh': '8vh',
        '13pt': '0.65rem',
        '17pt': '75%',
        '21pt': '0.935rem',
        '36pt': '1.665rem',
        '50pt': ['2.25rem', '2rem'],
        // Percentage gets too big
        // '21pt': '116.8%',
        // '36pt': '208%',
      },
      lineHeight: {
        '2vh': '2vh',
        '2.25vh': '2.25vh',
        '2.5vh': '2.5vh',
        '2.75vh': '2.75vh',
        '3vh': '3vh',
        '3.5vh': '3.5vh',
        '4vh': '4vh',
        '5vh': '5vh',
        '6vh': '6vh',
        '7vh': '7vh',
      },
      fontWeight: {
        'md': 450,
      },
      fontFamily: {
        'djr': ['forma-djr-banner'],
      },
    },
  },
  plugins: [ 
    require('@tailwindcss/typography'),
  ],
}
