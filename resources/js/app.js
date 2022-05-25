require('./bootstrap');

window.Vue = require('vue').default;

import Vue from "vue";
import VueToastr from "vue-toastr";
Vue.use(VueToastr);

Vue.component('add-to-cart-button', require('./components/AddToCart.vue').default);
Vue.component('cart', require('./components/Cart.vue').default);
Vue.component('checkout', require('./components/Checkout.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
});
