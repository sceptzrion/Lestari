/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    colors: {
      'light': '#ffffff',
      'dark': '#000',
      'gray': '#D9D9D9',
      // linear gradient colors
      'green': '#299E63',
      'dark-green': '#0F3823',
    },
    extend: {},
  },
  plugins: [
    require('daisyui')
  ],
}

