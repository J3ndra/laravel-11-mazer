import laravel from "laravel-vite-plugin";
import { resolve } from 'path';
import { defineConfig } from "vite";

export default defineConfig({
    resolve: {
        alias: {
            "~bootstrap": resolve(__dirname, "node_modules/bootstrap"),
            "~bootstrap-icons": resolve(
                __dirname,
                "node_modules/bootstrap-icons",
            ),
            "~perfect-scrollbar": resolve(
                __dirname,
                "node_modules/perfect-scrollbar",
            ),
            "~@fontsource": resolve(__dirname, "node_modules/@fontsource"),
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/sass/bootstrap.scss",
                "resources/sass/themes/dark/app-dark.scss",
                "resources/sass/app.scss",
                "resources/sass/pages/auth.scss",
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/initTheme.js",
                "resources/js/components/dark.js",
                "resources/js/pages/sweetalert2.js",
                "resources/sass/pages/sweetalert2.scss",
            ],
            refresh: true,
        }),
    ],
});
