import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'monoton': ['Monoton'],
                'abril-fatface': ['abril-fatface'],
            },
            // backgroundImage: {
            //     'profile': "url('https://cdn.pixabay.com/photo/2016/11/09/23/16/music-1813100_1280.png')",
            //    },
        },
    },
    variants: {},
    plugins: [forms],
};
