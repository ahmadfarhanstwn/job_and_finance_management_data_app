import { createWebHistory, createRouter } from "vue-router";

import Login from "../pages/Login";
import Register from "../pages/Register";
import Home from "../pages/dashboard/Home";

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
    {
        name: "home",
        path: "/home",
        component: Home,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
