/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/views/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
          sans: ["Poppins", "sans-serif"], // Tambahkan font Poppins
        },
      },
    },
    plugins: [],
  };
  