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
        'sm-2': '760px',  
        'md': '1280px',
        'lg': '1440px',
      },
      colors:{
        'grigio-chiaro': '#C6C6C6',
        'grigio-footer': '#EDEDED',
        'transparent': 'transparent',
      },
      spacing: {
        '13': '3.25rem',
        '15': '3.75rem',
        '17': '4.25rem',
        '18': '4.5rem',
        '21': '5.25rem',
        '23': '5.75rem',
        '25': '6.25rem',
        '76': '19rem',
        // Banner heights
        '12.5p': '12.5vh',
        '15p': '15vh',
        '29p': '29.17vh',
        '42p': '42.5vh',

        //Percentage spacing
        '5p': '5.23%',
        '6p': '6.64%',
        '77p': '77%',
      },
      fontSize: {
        '2xxl': ['1.7rem', '1.6rem'], 
        '1xl': ['1.45rem', '1.4rem'], 
        '3xl':'1.8rem', //overrides default 1.875
        '4.5xl':'2.625rem',
        's1':'0.75rem', //15px
        'menu': ['1.1rem',{
          letterSpacing: '0.12em',
          lineHeight: '1.2rem',
        }], 
        'xs': ['0.65rem',{
          letterSpacing: '0.12em',
          lineHeight: '1rem',
        }],
        'sm': ['0.85rem',{
          letterSpacing: '0.12em',
          lineHeight: '1.2rem',
        }], 
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
        '8vh': '8vh',
        '13pt': '0.65rem',
        '17pt': '75%',
        '21pt': '0.935rem',
        '36pt': '1.665rem',
        '50pt': ['2.25rem', '2rem'],
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
        '4.5': '1.125rem',
      },
      letterSpacing: {
        'widest-1': '.2em',
      },
      fontFamily: {
        'djr': ['forma-djr-banner'],
      },
      width: {
        '520px': '26rem',
        '700px': '35rem',
        '81': '20.5rem',
        '29p': '29vw',
      }
    },
  },
  plugins: [ 
    require('@tailwindcss/typography'),
    // animation: https://animate.style/
    require('tailwindcss-animatecss')({
            classes: [
            'animate__animated', 
            'animate__fadeInLeft', 
            'animate__fadeInLeftBig', 
            'animate__fadeInRight', 
            'animate__fadeInRightBig'
            ],
            settings: {
              animatedSpeed: 1000,
              heartBeatSpeed: 1000,
              hingeSpeed: 2000,
              bounceInSpeed: 750,
              bounceOutSpeed: 750,
              animationDelaySpeed: 1000
            },
            variants: ['responsive', 'hover', 'reduced-motion'],
          }),
  ],
}
