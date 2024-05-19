/** @type {import('tailwindcss').Config} */

export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      colors: {
          'primary' : '#000000',
          'secondary' : '#000000',
      },
    extend: {},
  },
  plugins: [
  ],
}

