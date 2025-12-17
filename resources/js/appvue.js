import './bootstrap';
import { createApp } from 'vue';
import App from './components/movie/App.vue';
import router from './router';

createApp(App)
    .use(router)
    .mount('#app');                   
