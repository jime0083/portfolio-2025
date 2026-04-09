import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  plugins: [vue()],
  base: '/portfolio-2025/',
  build: {
    outDir: 'dist',
    assetsDir: 'assets'
  }
})
