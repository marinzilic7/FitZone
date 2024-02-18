import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'
import Home from '../views/Home.vue'
import Services from '../views/Services.vue'







const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'login',
            component: Login
        },

        {
            path:'/register',
            name: 'register',
            component: Register
        },
        {
            path:'/home',
            name: 'home',
            component: Home
        },
        {
            path:'/services',
            name: 'services',
            component: Services
        }







    ]
})

export default router
