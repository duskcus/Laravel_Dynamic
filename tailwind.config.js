/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    // Configure dark mode to be class-based instead of auto
    darkMode: 'class', // Add this line to control dark mode via a class
    // Add the daisyui configuration here
    daisyui: {
        themes: ["light", "dark"],
    },
}
