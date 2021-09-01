import { createWebHistory, createRouter } from "vue-router";

import Login from "../pages/Login";
import Register from "../pages/Register";

export const routes = [
    {
        name: "login",
        path: "/",
        component: Login,
    },
    {
        name: "register",
        path: "/register",
        component: Register,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
