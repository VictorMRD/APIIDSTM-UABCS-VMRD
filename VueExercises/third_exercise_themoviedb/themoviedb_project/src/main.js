import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import Login from './components/Login.vue'

const routes = [
    { path: '/', component: Login },
    { path: '/App', component: App },
]

let VueRouter;

const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes, 
})

createApp.use(router)
createApp(Login).mount('#app')