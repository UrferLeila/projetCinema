import { createRouter, createWebHistory } from 'vue-router';
import MovieApp from './components/movie/MovieApp.vue';
import ReservationApp from './components/movie/ReservationAppSave.vue';

const routes = [
    { path: '/', component: MovieApp },
    { path: '/reservation/:id', name: "reservation", component: ReservationApp, props: true },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
