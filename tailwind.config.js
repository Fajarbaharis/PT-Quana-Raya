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
        // Brand Colors dari dokumentasi
        primary: {
          DEFAULT: '#1D4D3A',    // Forest Green
          dark: '#14382A',       // Darker untuk hover
          light: '#2A6B51',      // Lighter untuk accent
        },
        accent: {
          DEFAULT: '#C89D3C',    // Gold
          dark: '#A6822D',
          light: '#E5C576',
        },
        secondary: {
          DEFAULT: '#6B7280',    // Steel Gray
          dark: '#4B5563',
          light: '#9CA3AF',
        },
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        serif: ['Playfair Display', 'serif'],
      },
      backgroundImage: {
        'hero-pattern': "linear-gradient(to right, rgba(29, 77, 58, 0.9), rgba(29, 77, 58, 0.7)), url('/images/hero-engineering.jpg')",
      }
    },
  },
  plugins: [],
}