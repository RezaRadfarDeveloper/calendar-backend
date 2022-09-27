require('./bootstrap');

import "bootstrap";

import { createApp } from 'vue';
import Hello from './components/hello.vue'

const app = createApp({});
app.component('Hello', Hello);
app.mount('#app');