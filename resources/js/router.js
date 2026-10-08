import { createRouter, createWebHistory } from 'vue-router'
const Inventory = () => import('./components/pages/Inventory.vue')
const Dashboard = () => import('./components/pages/Dashboard.vue')


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            redirect: '/Dashboard',
        },
        {
            path: '/Dashboard',
            component: Dashboard,
            name: 'Dashboard',
        },
        {
            path: '/Inventory',
            component: Inventory,
            name: 'Inventory',
        },
    ]
})

export default router