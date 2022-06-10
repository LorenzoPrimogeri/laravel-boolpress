import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomeComponent from './pages/HomeComponent' 
import NotFoundComponent from './pages/NotFoundComponent' 
import BlogComponent from './pages/BlogComponent' 
import WhoWeAreComponent from './pages/WhoWeAreComponent' 

const router= new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/',
            name:'home',
            component:HomeComponent
        },
        {
            path:'/blog',
            name:'blog',
            component:BlogComponent
        },
        {
            path:'/who-we-are',
            name:'who-we-are',
            component:WhoWeAreComponent
        },

        {
            path:'/*',
            name:'notfound',
            component:NotFoundComponent
        }
    ]
    
})

export default router;

