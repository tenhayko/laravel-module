
require('./bootstrap');

window.Vue = require('vue');

Vue.component('blog', require('./../../Modules/Blog/Resources/assets/js/components/Blog.vue'));

const app = new Vue({
    el: '#app'
});
