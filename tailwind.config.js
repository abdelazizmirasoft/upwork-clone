/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.{blade.php, js, vue}",
    "./resources/**/**/*.{blade.php, js, vue}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
