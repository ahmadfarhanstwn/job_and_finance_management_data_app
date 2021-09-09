import { createWebHistory, createRouter } from "vue-router";

import Login from "../pages/Login";
import Register from "../pages/Register";
import Home from "../pages/dashboard/Home";
import Dashboard from "../pages/dashboard/Dashboard";
import PekerjaanAktif from "../pages/dashboard/PekerjaanAktif";
import TambahPekerjaanAktif from "../pages/dashboard/TambahPekerjaanAktif";
import HargaPekerjaan from "../pages/dashboard/HargaPekerjaan";
import TambahHargaPekerjaan from "../pages/dashboard/TambahHargaPekerjaan";
import Pengeluaran from "../pages/dashboard/Pengeluaran";
import TambahPengeluaran from "../pages/dashboard/TambahPengeluaran";
import LaporanPekerjaan from "../pages/dashboard/LaporanPekerjaan";
import LaporanKeuangan from "../pages/dashboard/LaporanKeuangan";
import Pengguna from "../pages/dashboard/Pengguna";

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
    {
        name: "hargapekerjaan",
        path: "/hargapekerjaan",
        component: HargaPekerjaan,
    },
    {
        name: "tambahhargapekerjaan",
        path: "/tambahharga",
        component: TambahHargaPekerjaan,
    },
    {
        name: "pengeluaran",
        path: "/pengeluaran",
        component: Pengeluaran,
    },
    {
        name: "tambahpengeluaran",
        path: "/tambahpengeluaran",
        component: TambahPengeluaran,
    },
    {
        name: "laporanpekerjaan",
        path: "/laporanpekerjaan",
        component: LaporanPekerjaan,
    },
    {
        name: "laporankeuangan",
        path: "/laporankeuangan",
        component: LaporanKeuangan,
    },
    {
        name: "pengguna",
        path: "/pengguna",
        component: Pengguna,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
