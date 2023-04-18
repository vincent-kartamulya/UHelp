/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            'yellow-new': 'rgba(247, 192, 75, 0.9)',
            'yellow-hover': 'rgba(247, 192, 75, 1)',
            'green-new': '#539064',
            'dark-blue-new': '#3F487F',
        },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
