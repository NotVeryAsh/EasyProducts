/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#48753e',
                'facebook': '#1877F2',
                'instagram': '#E1306C',
            }
        },
    },
    plugins: [],
}

