/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.{js,jsx,ts,scss,vue,tsx,php,blade.php}"
  ],
  theme: {
    extend: {
      colors: {
        'theme1': '#011422',
        'theme2': '#04272f',
        'theme3': '#090c37',
        'theme4': '#179dda',
        'theme5': '#35092d',
        'theme6': '#0a5978',
        'theme7': '#031720',
      },
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },
      borderRadius: {
        '4xl': '2rem',
      },
      backgroundImage: {
        'gradient1': 'linear-gradient(98.37deg, #75003b 0.99%, #22083f 100%)',
        'gradient2': 'linear-gradient(180deg,rgba(4, 21, 45, 0) 0%,#22083f 79.17%)',
        'gradient3': 'linear-gradient(180deg,rgba(4, 21, 45, 0) 0%,#04152d 79.17%)',
        'gradient4': 'linear-gradient(90deg,rgba(0, 0, 0, 0) 0,rgba(0, 0, 0, 0.2) 20%,rgba(0, 0, 0, 0.5) 60%,rgba(0, 0, 0, 0))'
      },
      boxShadow: {
        'custom1': '0px 0px 1px black, 0px 0px 1px black, 0px 0px 1px black, 0px 0px 2px white, 0px 0px 2px white',
        'custom2': 'drop-shadow(0px 0px 1px #04152d) drop-shadow(0px 0px 1px #04152d) drop-shadow(0px 0px 1px #04152d) drop-shadow(0px 0px 2px white) drop-shadow(0px 0px 2px white)'
      },
      dropShadow: {
        'custom1': [
          '0px 0px 1px #04152d',
          '0px 0px 1px #04152d',
          '0px 0px 1px #04152d',
          '0px 0px 2px white',
          '0px 0px 2px white',
        ]
      },
      animation: {
        topToBottom: 'topToBottom 0.3s ease forwards',
        shimmer: 'shimmer 2s infinite'
      },
      keyframes: {
        topToBottom: {
          '0%': { transform: 'translateY(-130%)' },
          '100%': { transform: 'translateY(0)' },
        },
        shimmer: {
          '100%': { transform: 'translateX(100%)' }
        }
      }
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/forms'),
  ],
}