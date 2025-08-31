/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.jsx",   // tambahin ini
    "./resources/**/*.ts",
    "./resources/**/*.tsx",
    "./resources/**/*.vue",
    "./resources/**/*.html",
  ],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ["Montserrat", "sans-serif"], // Montserrat tetap ada
      },
    },
  },
  plugins: [],
}

