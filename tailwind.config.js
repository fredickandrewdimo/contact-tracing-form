/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        example: "#000000",
      },
      fontFamily: {
        sans: ["Open Sans"],
      },
    },
  },
  plugins: [],
};
