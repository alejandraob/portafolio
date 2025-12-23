import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'app-bg': '#fffef6',
                'primary': {
                    DEFAULT: '#0550b8',
                    hover: '#04449c',
                    active: '#03357a',
                },
                'dark': {
                    DEFAULT: '#1a355c',
                    muted: 'rgba(26, 53, 92, 0.7)',
                    disabled: 'rgba(26, 53, 92, 0.4)',
                },
                'card': '#ffffff',
            },
            borderColor: {
                'default': 'rgba(26, 53, 92, 0.25)',
            },
        },
    },

    plugins: [forms],
};
