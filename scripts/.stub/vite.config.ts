// @ts-check
import { resolve } from "path";
import { defineConfig } from "vite";
import dts from "vite-plugin-dts";
export default defineConfig({
  build: {
    lib: {
      entry: resolve(__dirname, "src/index.ts"),
      name: "{{TITLE_NAME}}",
      fileName: "{{PUBLIC_NAME}}",
      formats: ["es"],
    },
    rollupOptions: {},
  },
  resolve: { alias: { src: resolve('src/') } },
  plugins: [dts({ rollupTypes: true })],
});
