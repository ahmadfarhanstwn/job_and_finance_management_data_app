import { createWebHistory, createRouter } from "vue-router";

import Login from "../pages/Login";
import Register from "../pages/Register";
import Home from "../pages/dashboard/Home";
import Dashboard from "../pages/dashboard/Dashboard";
import PekerjaanAktif from "../pages/dashboard/PekerjaanAktif";
import TambahPekerjaanAktif from "../pages/dashboard/TambahPekerjaanAktif";

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
    {
        name: "dashboard",
        path: "/dashboard",
        component: Dashboard,
    },
    {
        name: "pekerjaanAktif",
        path: "/pekerjaanaktif",
        component: PekerjaanAktif,
    },
    {
        name: "tambahpekerjaanaktif",
        path: "/tambahpekerjaan",
        component: TambahPekerjaanAktif,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
