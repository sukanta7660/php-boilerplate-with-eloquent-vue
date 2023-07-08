import {createRouter, createWebHashHistory} from 'vue-router';
import Home from '../Public/Home/Home.vue';
import About from '../Public/About/About.vue';

const routes = [
    {
        path: '/',
        publicPath: '/',
        component: Home,
        name: 'Home'
    },
    {
        path: '/about',
        publicPath: '/',
        component: About,
        name: 'About'
    }
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
});

export default router;
