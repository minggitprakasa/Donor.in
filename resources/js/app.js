
require('./bootstrap');

window.Vue = require('vue');

Vue.component('posts', require('./components/posts.vue').default);

const app = new Vue({
    el: '#app',
});
