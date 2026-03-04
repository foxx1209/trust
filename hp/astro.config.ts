import partytown from "@astrojs/partytown";
import sitemap from "@astrojs/sitemap";
// @ts-check
import { defineConfig } from "astro/config";
import vaultcss from "vite-plugin-vaultcss";
import { SITE } from "./src/config";
import path from "path";
import { fileURLToPath } from "url";

const __dirname = path.dirname(fileURLToPath(import.meta.url));

// https://astro.build/config
export default defineConfig({
  base: SITE.base || undefined,
  site: SITE.url,
  outDir: 'transform', // ビルド出力フォルダ名を変更する場合はここを編集
  vite: {
    resolve: {
      alias: {
        "@": path.resolve(__dirname, "./src"),
        "@src": path.resolve(__dirname, "./src"),
        "@layouts": path.resolve(__dirname, "./src/layouts"),
        "@components": path.resolve(__dirname, "./src/components"),
        "@assets": path.resolve(__dirname, "./src/assets"),
        "@styles": path.resolve(__dirname, "./src/styles"),
      },
    },
    plugins: [vaultcss({
      fluid: {
        minViewPort: 375,
        maxViewPort: 1440,
        baseFontSize: 16,
      },
    })],
  },

  prefetch: {
    prefetchAll: true,
  },

  server: {
    host: true,
    open: true,
  },

  integrations: [
    sitemap(),
    partytown({
      config: {
        forward: ["dataLayer.push"],
      },
    }),
  ],
});
