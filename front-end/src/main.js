import { createApp } from 'vue';

import App from './App.vue';
import router from './router';

//** Styles */
import "bootstrap/dist/css/bootstrap.min.css";
import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';
import "vue-select/dist/vue-select.css";
import '@/assets/app.css';
import "sweetalert2/dist/sweetalert2.min.css";

import axios from 'axios';
import VueAxios from 'vue-axios';
import VueSelect from 'vue-select';
import store from './store'
export const urlApi = 'http://localhost:8000/api/';

createApp(App).use(router)
    .use(VueAxios, axios)
    .use(store)
    .component("v-select", VueSelect)
    .mount('#app');
