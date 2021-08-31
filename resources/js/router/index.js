import { createWebHistory, createRouter } from "vue-router";

import Login from "../pages/Login";

export const routes = [
    {
        name: "login",
        path: "/",
        component: Login,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
