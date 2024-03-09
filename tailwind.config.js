/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#facc15", //sky-500
                dark: "#0f172a",
                secondary: "#64748b", //slate-500
            },
        },
    },
    plugins: [],
};
