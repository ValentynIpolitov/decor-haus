require('./bootstrap');
import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";

import { ZiggyVue } from "ziggy";
import { Ziggy } from "./ziggy";

import 'maz-ui/css/main.css'
import MazPhoneNumberInput from 'maz-ui/components/MazPhoneNumberInput'
import MazInput from 'maz-ui/components/MazInput'

import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'

import VueCookieAcceptDecline from 'vue-cookie-accept-decline';
import 'vue-cookie-accept-decline/dist/vue-cookie-accept-decline.css';

import Layout from './Layouts/Guest';

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
            .use(VueViewer)
            .component("Link", Link)
            .component("Head", Head)
            .component('vue-cookie-accept-decline', VueCookieAcceptDecline)
            .component('MazPhoneNumberInput', MazPhoneNumberInput)
            .component('MazInput', MazInput)
            .mixin({ methods: { route } })
            .mixin(require('./base'))
            .mount(el);
    },

    title: title => `${title} - Decor Haus`
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