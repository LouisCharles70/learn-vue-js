import router from "./routes";
require('./bootstrap');

const app = new Vue({
    el:'#app',

    router
});

