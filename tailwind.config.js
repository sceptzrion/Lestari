/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    colors: {
      'light': '#ffffff',
      'dark': '#000',
      'gray': '#D9D9D9',
      // linear gradient colors user
      'green': '#299E63',
      'dark-green': '#0F3823',
      // linear gradient colors admin
      'green-admin': '#3EC384',
      'dark-green-admin': '#1E5D3F'
    },
    extend: {},
  },
  plugins: [
    require('daisyui')
  ],
}

