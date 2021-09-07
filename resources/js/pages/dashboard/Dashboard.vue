<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 mr-4 my-8 p-2">
            <h1 class="font-extrabold text-2xl">OVERVIEW</h1>
            <div class="flex flex-row justify-start mt-2 mb-4">
                <div class="w-1/3 h-32 rounded-lg bg-chelsea p-4 mr-3">
                    <div class="flex flex-row justify-between">
                        <div class="">
                            <h1 class="font-extrabold text-5xl mb-2">9</h1>
                            <h1 class="text-madrid font-bold text-lg">
                                PEKERJAAN AKTIF
                            </h1>
                        </div>
                        <div class="justify-center">
                            <div
                                class="
                                    h-20
                                    w-20
                                    rounded-full
                                    bg-maroon
                                    px-4
                                    py-4
                                "
                            >
                                <img src="../../assets/pekerjaan.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 h-32 rounded-lg bg-greenforest p-4 mr-3">
                    <h1 class="text-madrid font-bold text-lg mb-2">
                        PEMASUKAN HARI INI
                    </h1>
                    <h1 class="font-extrabold text-4xl mb-2">RP. 1.500.000</h1>
                </div>
                <div class="w-1/3 h-32 rounded-lg bg-tai p-4 mr-3">
                    <h1 class="text-navbar font-bold text-lg mb-2">
                        PEMASUKAN BULAN INI
                    </h1>
                    <h1 class="font-extrabold text-4xl mb-2">RP. 25.000.000</h1>
                </div>
            </div>
            <h1 class="font-extrabold text-2xl">MENDEKATI DEADLINE</h1>
            <div
                class="
                    mt-2
                    max-w-full
                    h-72
                    rounded-lg
                    bg-madrid
                    p-2
                    overflow-auto
                    mb-4
                "
            >
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Nama Pekerjaan
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-sm
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Deskripsi Pekerjaan
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-sm
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Nama Pelanggan
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-sm
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Kontak Pelanggan
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-sm
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Deadline
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-madrid">
                        <tr>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    Bubut As
                                </div>
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b
                                    text-blue-900
                                    border-admin
                                    text-sm
                                    leading-5
                                "
                            >
                                Bubut As Nata 5 buah
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b
                                    text-blue-900
                                    border-admin
                                    text-sm
                                    leading-5
                                "
                            >
                                Warno Bangstakotowodoyo
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b
                                    text-blue-900
                                    border-admin
                                    text-sm
                                    leading-5
                                "
                            >
                                081726361738
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b
                                    text-blue-900
                                    border-admin
                                    text-sm
                                    leading-5
                                "
                            >
                                5 September 2021
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="font-extrabold text-2xl mb-2">
                GRAFIK JUMLAH PEKERJAAN
            </h1>
            <div class="w-full h-96 rounded-lg bg-madrid p-3 mb-4"></div>
            <h1 class="font-extrabold text-2xl mb-2">
                GRAFIK JUMLAH PEMASUKAN
            </h1>
            <div class="w-full h-96 rounded-lg bg-madrid p-3 mb-2"></div>
        </div>
    </main>
</template>

<script>
import SideMenu from "../../components/SideMenu.vue";
export default {
    components: {
        SideMenu,
    },
};
</script>
