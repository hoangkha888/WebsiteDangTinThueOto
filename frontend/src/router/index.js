import { createRouter, createWebHistory } from 'vue-router';
import path from './path';

const routes = [...path];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;