
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// Vuex
import Vuex from 'vuex';
Vue.use(Vuex);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import store from './store'

Vue.component('themes', require('./components/Themes.vue'));
Vue.component('theme', require('./components/Theme.vue'));
Vue.component('collection', require('./components/Collection.vue'));
Vue.component('card-creator', require('./components/CardCreator.vue'));

const app = new Vue({
    el: '#app',
    store
});
