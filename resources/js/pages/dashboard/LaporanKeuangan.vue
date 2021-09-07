<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 mr-4 my-8 p-2">
            <div class="flex flex-row justify-start mb-4">
                <div
                    class="
                        bg-greenforest
                        rounded-lg
                        w-1/4
                        h-32
                        flex flex-col
                        mr-2
                    "
                >
                    <h1
                        class="
                            text-madrid text-center text-lg
                            font-bold
                            mb-2
                            mt-4
                        "
                    >
                        JUMLAH PEMASUKAN
                    </h1>
                    <h1 class="text-black text-center text-xl font-bold">
                        RP. 15.000.000
                    </h1>
                </div>
                <div class="bg-munyuk rounded-lg w-1/4 h-32 flex flex-col mr-2">
                    <h1
                        class="
                            text-madrid text-center text-lg
                            font-bold
                            mb-2
                            mt-4
                        "
                    >
                        JUMLAH PENGELUARAN
                    </h1>
                    <h1 class="text-black text-center text-xl font-bold">
                        RP. 5.000.000
                    </h1>
                </div>
                <div class="bg-tai rounded-lg w-1/4 h-32 flex flex-col mr-2">
                    <h1
                        class="
                            text-navbar text-center text-lg
                            font-bold
                            mb-2
                            mt-4
                        "
                    >
                        LABA BERSIH
                    </h1>
                    <h1 class="text-black text-center text-xl font-bold">
                        RP. 10.000.000
                    </h1>
                </div>
                <div
                    class="bg-chelsea rounded-lg w-1/4 h-32 flex flex-col mr-2"
                >
                    <h1
                        class="
                            text-madrid text-center text-lg
                            font-bold
                            mb-2
                            mt-4
                        "
                    >
                        JUMLAH PEKERJAAN
                    </h1>
                    <h1 class="text-black text-center text-xl font-bold">65</h1>
                </div>
            </div>
            <div class="flex justify-end mb-2">
                <div
                    class="
                        w-64
                        h-8
                        rounded-lg
                        bg-greenforest
                        flex flex-row
                        p-1
                        mb-2
                        mr-2
                    "
                >
                    <img src="../../assets/excel.png" class="h-6 mr-2" alt="" />
                    <h1 class="text-madrid text-base">EXPORT KE EXCEL</h1>
                </div>
            </div>
            <div class="w-full h-full bg-madrid rounded-lg p-4">
                <h1 class="font-bold mb-2">DATA KEUANGAN</h1>
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
                                    text-navbar text-xs
                                    tracking-wider
                                "
                            >
                                Nama Transaksi
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left
                                    leading-4
                                    text-navbar text-xs
                                    tracking-wider
                                "
                            >
                                Tipe Transaksi
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left
                                    leading-4
                                    text-navbar text-xs
                                    tracking-wider
                                "
                            >
                                Jumlah
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left
                                    leading-4
                                    text-navbar text-xs
                                    tracking-wider
                                "
                            >
                                Tanggal Transaksi
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
                                    Beli Solar
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
                                <span
                                    class="
                                        relative
                                        inline-block
                                        px-3
                                        py-1
                                        font-semibold
                                        text-green-900
                                        leading-tight
                                    "
                                >
                                    <span
                                        aria-hidden
                                        class="
                                            absolute
                                            inset-0
                                            bg-munyuk
                                            opacity-50
                                            rounded-full
                                        "
                                    ></span>
                                    <span class="relative text-xs"
                                        >Pengeluaran</span
                                    ></span
                                >
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    Rp. 30.000
                                </div>
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    7 September 2021
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
