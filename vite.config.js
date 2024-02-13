import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import styleImport from 'vite-plugin-style-import';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    styleImport({
      libs: [
        {
          libraryName: 'bootstrap',
          esModule: true,
          ensureStyleFile: true,
          resolveStyle: name => `bootstrap/dist/css/${name}.css`,
        },
      ],
    }),
  ],
});
