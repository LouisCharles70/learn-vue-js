import Example from "./components/Example";
import Carousel from "./components/Carousel";

require('./bootstrap');

window.Vue = require('vue');


const app = new Vue({
    components: { Carousel },
    el: '#app'
});


