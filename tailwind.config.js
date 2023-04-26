/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php" ,
    "./resources**/*.js"
    //El doble asterisco es para todas las carpetas y el * es para el nombre del archivo
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
