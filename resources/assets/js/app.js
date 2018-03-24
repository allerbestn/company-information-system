import Vue from 'vue'
import App from './components/App.vue'
import router from './router'
import BootstrapVue from 'bootstrap-vue'

import Car from './components/Car'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue);

 // Vue.http.headers.common['X-CSRF-TOKEN'] = Laravel.csrfToken;

const app = new Vue({
    el: '#app',
    components: { App },
    template: '<app></app>',
    router
});

