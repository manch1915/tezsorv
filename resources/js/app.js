import "../css/main.css";
import { createPinia } from "pinia";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import { MotionPlugin } from "@vueuse/motion";

const appName = window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";
const pinia = createPinia();

(async () => {
    await createInertiaApp({
        title: (title) => `${title} - ${appName}`,
        resolve: (name) =>
            resolvePageComponent(
                `./Pages/${name}.vue`,
                import.meta.glob("./Pages/**/*.vue")
            ),
        async setup({el, App, props, plugin}) {
            const app = createApp({render: () => h(App, props)});

            app.use(plugin);
            app.use(pinia);
            app.use(ZiggyVue);
            app.use(MotionPlugin);

            app.mount(el);
        },
        progress: {
            color: "#4B5563",
        },
    });
})();
