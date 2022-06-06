module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js',
  ],
  theme: {
    extend: {},
  },
  variants: {
      extend: {
          display: ["group-hover"],
      },
  },  
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}