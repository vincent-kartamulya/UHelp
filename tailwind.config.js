/** @type {import('tailwindcss').Config} */
export const content = [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
];
export const theme = {
    extend: {
        colors: {
            'yellow-new': 'rgba(247, 192, 75, 0.9)',
            'yellow-hover': 'rgba(247, 192, 75, 1)',
            'green-new': '#539064',
            'dark-blue-new': '#3F487F',
        },
        fontFamily: {
            'font-poppins': ['Poppins', 'sans-serif'],
        },
        boxShadow: {
            'shadow-custom': '0px 4px 4px rgba(0, 0, 0, 0.25)',
        },
        screens: {
            'mobile': '16.667vw',
            'tablet': '33.333vw',
            'laptop': '53.333vw',
        },
    },
};
export const plugins = [
    require('flowbite/plugin')
];

// module.exports = {
//     content: [
//       "./resources/**/*.blade.php",
//       "./resources/**/*.js",
//       "./resources/**/*.vue",
//       "./node_modules/flowbite/**/*.js",
//     ],
//     theme: {
//       extend: {
//           colors: {
//               'yellow-new': 'rgba(247, 192, 75, 0.9)',
//               'yellow-hover': 'rgba(247, 192, 75, 1)',
//               'green-new': '#539064',
//               'dark-blue-new': '#3F487F',
//           },
//           fontFamily: {
//               'font-poppins': ['Poppins', 'sans-serif'],
//           },
//       },
//     },
//     plugins: [
//       require('flowbite/plugin')
//     ],
//   }

