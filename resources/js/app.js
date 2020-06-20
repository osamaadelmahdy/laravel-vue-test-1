
require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import my_header from './components/myHeader'
import login from './components/login'
import post from './components/post'
import register from './components/register'


const routes = [
    { path: '/login', component: login },
    { path: '/register', component: register },
    { path: '/post', component: post }
]
const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    router,
    components: {
        my_header
    }
});
