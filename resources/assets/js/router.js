import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        { path: '/transport', component: require('./components/Transport') },
        { path: '/', component: require('./components/Home') }
    ]
});

export default router