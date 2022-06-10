require('./bootstrap');
window.axios= require('axios');

window.Vue = require('vue');

import AppComponent from './app/AppComponent'
import router from './routes';

const app = new Vue({
    el: '#app',
    render:(h)=> h(AppComponent),
    router
});
 

