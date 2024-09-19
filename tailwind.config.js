// tailwind.config.js
import typography from '@tailwindcss/typography';
import forms from '@tailwindcss/forms';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
          primary: '#ffffff',
          secondary: {
              DEFAULT: '#ff69b4',
              light: '#ff9cd6',
              dark: '#cc5490',
          },
          'elegant-black': '#1a1a1a',
      },
    },
  },
  plugins: [
    typography,
    forms,
    aspectRatio,
  ],
}
