const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'dark-blue': '#090743',
                'light-blue' : '#180C4F',
                'sky-blue':'#00D3FF',
                'light-gray':'#8989A2'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
