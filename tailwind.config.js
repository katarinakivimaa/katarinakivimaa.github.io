import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#CA2B30",
                neutral: "#FFDCC5",
                reDark: "#1E000E",
                secondary: "#FFDCC5",
                success: "#00F937",
                defeat: "#D00000",
            },
            fontFamily: {
                primary: ['"KoHo"', ...defaultTheme.fontFamily.sans],
                secondary: ["Komikazoom"]
            },
            height: {
                inherit: "inherit",
            },
            width: {
                inherit: "inherit",
            },
        },
    },
    plugins: [],
};
