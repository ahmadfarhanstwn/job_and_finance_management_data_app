<template>
    <div class="m-4">
        <div
            class="
                container
                w-72
                bg-madrid
                rounded-xl
                p-2
                overflow-hidden
                fixed
            "
        >
            <ul class="flex flex-col py-2 space-y-1">
                <li>
                    <div class="flex justify-center">
                        <img
                            class="object-contain h-14"
                            src="../assets/logo.svg"
                        />
                    </div>
                </li>
                <hr />
                <li>
                    <div class="flex justify-start my-2">
                        <div
                            class="
                                bg-maroon
                                h-10
                                w-10
                                rounded-lg
                                mr-2
                                text-center text-madrid
                                px-2
                                py-2
                            "
                        >
                            A
                        </div>
                        <div class="py-1">
                            <h1 class="font-bold">AHMAD FARHAN S</h1>
                            <h1 class="text-xs text-admin">ADMIN</h1>
                        </div>
                    </div>
                </li>
                <hr />
                <li>
                    <router-link :to="{ name: 'home' }">
                        <div
                            class="
                                h-9
                                w-30
                                bg-maroon bg-opacity-60
                                rounded-lg
                                my-1
                                mr-2
                                cursor-pointer
                                hover:bg-maroon hover:bg-opacity-60
                                text-navbar
                                hover:text-black
                            "
                        >
                            <div class="flex flex-row px-2 py-1">
                                <span
                                    ><img
                                        src="../assets/home.png"
                                        class=""
                                        alt=""
                                /></span>
                                <h1 class="ml-3 my-0.5 text-sm font-bold">
                                    HOME
                                </h1>
                            </div>
                        </div></router-link
                    >
                </li>
                <li>
                    <router-link :to="{ name: 'dashboard' }"
                        ><div
                            class="
                                h-9
                                w-30
                                bg-abu
                                rounded-lg
                                my-1
                                mr-2
                                cursor-pointer
                                hover:bg-maroon hover:bg-opacity-60
                                text-navbar
                                hover:text-black
                            "
                        >
                            <div class="flex flex-row px-2 py-1">
                                <span
                                    ><img
                                        src="../assets/dashboard.png"
                                        class="h-6"
                                        alt=""
                                /></span>
                                <h1 class="ml-3 my-0.5 text-sm font-extrabold">
                                    DASHBOARD
                                </h1>
                            </div>
                        </div></router-link
                    >
                </li>
                <li>
                    <router-link :to="{ name: 'pekerjaanAktif' }">
                        <div
                            class="
                                h-9
                                w-30
                                bg-abu
                                rounded-lg
                                my-1
                                mr-2
                                cursor-pointer
                                hover:bg-maroon hover:bg-opacity-60
                                text-navbar
                                hover:text-black
                            "
                        >
                            <div class="flex flex-row px-2 py-1">
                                <span
                                    ><img
                                        src="../assets/pekerjaan.png"
                                        class="h-6"
                                        alt=""
                                /></span>
                                <h1 class="ml-3 my-0.5 text-sm font-extrabold">
                                    PEKERJAAN AKTIF
                                </h1>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'hargapekerjaan' }">
                        <div
                            class="
                                h-9
                                w-30
                                bg-abu
                                rounded-lg
                                my-1
                                mr-2
                                cursor-pointer
                                hover:bg-maroon hover:bg-opacity-60
                                text-navbar
                                hover:text-black
                            "
                        >
                            <div class="flex flex-row px-2 py-1">
                                <span
                                    ><img
                                        src="../assets/harga.png"
                                        class="h-6"
                                        alt=""
                                /></span>
                                <h1 class="ml-3 my-0.5 text-sm font-extrabold">
                                    HARGA PEKERJAAN
                                </h1>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'pengeluaran' }">
                        <div
                            class="
                                h-9
                                w-30
                                bg-abu
                                rounded-lg
                                my-1
                                mr-2
                                cursor-pointer
                                hover:bg-maroon hover:bg-opacity-60
                                text-navbar
                                hover:text-black
                            "
                        >
                            <div class="flex flex-row px-2 py-1">
                                <span
                                    ><img
                                        src="../assets/pengeluaran.png"
                                        class="h-6"
                                        alt=""
                                /></span>
                                <h1 class="ml-3 my-0.5 text-sm font-extrabold">
                                    PENGELUARAN
                                </h1>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'laporanpekerjaan' }">
                        <div
                            class="
                                h-9
                                w-30
                                bg-abu
                                rounded-lg
                                my-1
                                mr-2
                                cursor-pointer
                                hover:bg-maroon hover:bg-opacity-60
                                text-navbar
                                hover:text-black
                            "
                        >
                            <div class="flex flex-row px-2 py-1">
                                <span
                                    ><img
                                        src="../assets/pekerjaan.png"
                                        class="h-6"
                                        alt=""
                                /></span>
                                <h1 class="ml-3 my-0.5 text-sm font-extrabold">
                                    LAPORAN PEKERJAAN
                                </h1>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'laporankeuangan' }">
                        <div
                            class="
                                h-9
                                w-30
                                bg-abu
                                rounded-lg
                                my-1
                                mr-2
                                cursor-pointer
                                hover:bg-maroon hover:bg-opacity-60
                                text-navbar
                                hover:text-black
                            "
                        >
                            <div class="flex flex-row px-2 py-1">
                                <span
                                    ><img
                                        src="../assets/pengeluaran.png"
                                        class="h-6"
                                        alt=""
                                /></span>
                                <h1 class="ml-3 my-0.5 text-sm font-extrabold">
                                    LAPORAN KEUANGAN
                                </h1>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'pengguna' }">
                        <div
                            class="
                                h-9
                                w-30
                                bg-abu
                                rounded-lg
                                my-1
                                mr-2
                                cursor-pointer
                                hover:bg-maroon hover:bg-opacity-60
                                text-navbar
                                hover:text-black
                            "
                        >
                            <div class="flex flex-row px-2 py-1">
                                <span
                                    ><img
                                        src="../assets/pengguna.png"
                                        class="h-6"
                                        alt=""
                                /></span>
                                <h1 class="ml-3 my-0.5 text-sm font-extrabold">
                                    PENGGUNA
                                </h1>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li>
                    <div
                        class="
                            h-9
                            w-30
                            bg-abu
                            rounded-lg
                            my-1
                            mr-2
                            cursor-pointer
                            hover:bg-maroon hover:bg-opacity-60
                            text-navbar
                            hover:text-black
                        "
                    >
                        <div class="flex flex-row px-2 py-1">
                            <span
                                ><img
                                    src="../assets/logout.png"
                                    class="h-6"
                                    alt=""
                            /></span>
                            <h1 class="ml-3 my-0.5 text-sm font-extrabold">
                                LOGOUT
                            </h1>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
