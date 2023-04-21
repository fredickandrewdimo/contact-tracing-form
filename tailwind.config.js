/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        royalBlue: "#3978F5",
        lightBlue: "#EEF4FF",
        darkGray: "#4D4D4D",
        gray: "#8A8A8A",
        lightGray: "#F3F3F3",
        red: "#D54741",
        lightRed: "#FBF2F2",
      },
      fontFamily: {
        sans: ["Open Sans"],
      },
    },
  },
  plugins: [],
};
