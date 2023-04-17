/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
        'yellow-new': '#F7C04B',
        'green-new': '#539064',
        'dark-blue-new': '#3F487F',
    },
  },
  plugins: [],
}
