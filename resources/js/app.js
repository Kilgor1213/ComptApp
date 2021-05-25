import Vue from "vue";
import App from "./App.vue";
import router from "./routes";
import vuetify from "./plugins/vuetify";

require("./bootstrap");



const app = new Vue({
    el: "#app",
    components: { App },
    vuetify,
    router
});
