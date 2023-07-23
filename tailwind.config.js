/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["D:/xampp/htdocs/MySmarthome/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'latar' : '#003902',
        'contentcolour': '#036400',
        'logouthover' : '#035200',
        'logoutactive' : '#024700',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}

