/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//import Vue from 'vue'
//import VueRouter from 'vue-router'

window.Vue = require('vue');

//Import View Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)


import App from './views/App.vue'
import Home from './views/Home.vue'
console.log("Hello world");
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        }
    ],
});

const app = new Vue({
    el: '#app',
    router,
    components: { App },

});

export default app;
