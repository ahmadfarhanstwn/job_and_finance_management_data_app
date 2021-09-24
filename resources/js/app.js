import { createApp } from "vue";

import App from "./App.vue";
import axios from "axios";
import router from "./router";
// import VueTailwindPicker from "vue-tailwind-picker";
// import Vue from "vue";
import LitepieDatePicker from "litepie-datepicker";
import dayjs from "dayjs";
import "dayjs/locale/id";
import Pagination from "v-pagination-3";
// import pagination from "laravel-vue-pagination";

window.Vue = require("vue");
const app = createApp(App);
app.config.globalProperties.$axios = axios;
app.use(router);
app.mount("#app");
// Vue.use(VueTailwindPicker);
// app.use(pagination);
app.component("pagination", Pagination);
dayjs.locale("id");
app.use(LitepieDatePicker);
