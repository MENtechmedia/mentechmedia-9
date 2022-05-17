require('./bootstrap');

import collect from 'collect.js';

window.Vue = require('vue');
window.eventsHub = new Vue();


/**
 * Auto vue files loading
 */
const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


/**
 * Vue instance
 */

const app = new Vue({
    el: '#app',
});
