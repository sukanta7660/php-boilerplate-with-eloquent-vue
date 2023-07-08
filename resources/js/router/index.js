import {createRouter, createWebHashHistory} from 'vue-router';
import Home from '../Public/Home/Home.vue';

const routes = [
    {
        path: '/',
        publicPath: '/',
        component: Home,
        name: 'Home'
    }
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
});

export default router;
