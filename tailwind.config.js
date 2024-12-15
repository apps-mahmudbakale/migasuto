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
            },
            colors: {
                    primary: {
                        600: '#3b82f6', // Set your primary color shade here
                        700: '#2563eb', // Optional: Add darker shade for hover states
                    },
                },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')({
            datatables: true,
        }),
    ],
};
