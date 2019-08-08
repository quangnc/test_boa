
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('room-gallery', require('./components/RoomGallery.vue'));
Vue.component('choose-image', require('./components/ImageManager.vue'));
Vue.component('list-images', require('./components/ListImage.vue'));
Vue.component('gallery', require('./components/Gallery.vue'));
Vue.component('slideshow', require('./components/Slideshow.vue'));
Vue.component('partner', require('./components/Partner.vue'));
Vue.component('megamenu', require('./components/Megamenu.vue'));
Vue.component('special', require('./components/Special.vue'));
Vue.component('specialcruise', require('./components/SpecialCruise.vue'));
Vue.component('number', require('./components/Number.vue'));
Vue.component('service', require('./components/Service.vue'));
Vue.component('input-group', require('./components/InputGroup.vue'));
Vue.component('out-latest-work', require('./components/OurLatestWork.vue'));
Vue.component('list', require('./components/List.vue'));
Vue.component('testimonial', require('./components/Testimonial.vue'));
Vue.component('pricing', require('./components/Pricing.vue'));
Vue.component('layout', require('./components/Layout.vue'));
Vue.component('availability', require('./components/Availability.vue'));
Vue.component('checkbox', require('./components/Checkbox.vue'));
Vue.component('review', require('./components/Review.vue'));

const app = new Vue({
    el: '#app'
});
