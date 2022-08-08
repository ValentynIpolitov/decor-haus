require('./bootstrap');
import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";

import { ZiggyVue } from "ziggy";
import { Ziggy } from "./ziggy";

import Layout from './Shared/Layout';

createInertiaApp({
    resolve: async (name) => {
        let page = (await import(`./Pages/${name}`)).default; 

        page.layout ??= Layout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .component("Link", Link)
            .component("Head", Head)
            .mixin({ methods: { route } })
            .mount(el);
    },

    title: title => `${title} - My App`
});

InertiaProgress.init({
    color: 'orange'
});

import AOS from 'aos';
AOS.init({
    offset: 200,
    delay: 100,
    duration: 1000,  
    once: true,
});