import Vue from "vue";
import VueRouter from "vue-router";
import Home from './components/Home.vue';
import About from './components/pages/About.vue';
import Exercices from './components/pages/Exercices.vue';
import Content from './components/pages/Content.vue';
import Login from './components/pages/Login.vue';
import Signup from './components/pages/Signup.vue';
import BilanEX from './components/pages/Exercices/BilanEx.vue';

Vue.use(VueRouter);

export default new VueRouter({
   mode:'history',

   routes: [
       {
           path: '/',
           component:Home

       },
       {
        path: '/about',
        component:About

    },
    {
        path: '/cours',
        component:Content

    },
    {
        path: '/exercices',
        component:Exercices

    },
    {
        path: '/login',
        component:Login  

    },
    {
        path: '/signup',
        component:Signup  

    },
    {
        path: '/bilanex',
        component:BilanEX  

    },

   ]
})