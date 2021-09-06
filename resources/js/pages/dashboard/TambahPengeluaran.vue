<template>
    <main>
        <div class="flex justify-center">
            <div class="bg-madrid w-2/3 h-auto p-4 rounded-lg m-4">
                <router-link :to="{ name: 'pengeluaran' }">
                    <div
                        class="
                            w-40
                            h-8
                            rounded-lg
                            bg-maroon
                            flex flex-row
                            p-1
                            mb-2
                        "
                    >
                        <img
                            src="../../assets/kembali.png"
                            class="h-6 mr-2"
                            alt=""
                        />
                        <h1 class="text-madrid text-base">KEMBALI</h1>
                    </div>
                </router-link>
                <h1 class="text-center text-lg font-bold mb-2">
                    TAMBAH DATA PENGEELUARAN
                </h1>
                <form action="">
                    <div class="mb-2">
                        <label
                            for="namapengeluaran"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >NAMA PENGELUARAN :</label
                        >
                        <input
                            class="
                                border-2 border-opacity-75
                                rounded-lg
                                w-full
                                py-2
                                px-3
                                text-gray-700
                                leading-tight
                                focus:outline-none focus:shadow-outline
                            "
                            type="text"
                            id="namapengeluaran"
                            placeholder="Masukkan Nama Pengeluaran"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="detailpengeluaran"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >DETAIL PENGELUARAN :</label
                        >
                        <input
                            class="
                                border-2 border-opacity-75
                                rounded-lg
                                w-full
                                py-2
                                px-3
                                text-gray-700
                                leading-tight
                                focus:outline-none focus:shadow-outline
                            "
                            type="text"
                            id="detailpengeluaran"
                            placeholder="Masukkan Detail Pengeluaran"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="deskripsipekerjaan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >KATEGORI PENGELUARAN :</label
                        >
                        <select
                            class="
                                border-2 border-opacity-75
                                rounded-lg
                                w-full
                                py-2
                                px-3
                                text-gray-700
                                leading-tight
                                focus:outline-none focus:shadow-outline
                            "
                            aria-placeholder="NAMA PENGELUARAN"
                        >
                            <option value="">Keperluan Operasional</option>
                            <!-- <option value="Pekerja">Pekerja</option>
                        <option value="Pemilik">Pemilik</option> -->
                        </select>
                    </div>
                    <div class="mb-2">
                        <label
                            for="jumlahpengeluaran"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >JUMLAH PENGELUARAN :</label
                        >
                        <input
                            class="
                                border-2 border-opacity-75
                                rounded-lg
                                w-full
                                py-2
                                px-3
                                text-gray-700
                                leading-tight
                                focus:outline-none focus:shadow-outline
                            "
                            type="text"
                            id="jumlahpengeluaran"
                            placeholder="Masukkan Jumlah Pengeluaran"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="penanggungjawab"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >PENANGGUNG JAWAB :</label
                        >
                        <select
                            class="
                                border-2 border-opacity-75
                                rounded-lg
                                w-full
                                py-2
                                px-3
                                text-gray-700
                                leading-tight
                                focus:outline-none focus:shadow-outline
                            "
                            aria-placeholder="NAMA PENANGGUNGJAWAB"
                        >
                            <option value="">Yanto</option>
                            <!-- <option value="Pekerja">Pekerja</option>
                        <option value="Pemilik">Pemilik</option> -->
                        </select>
                    </div>
                    <div class="mb-2">
                        <label
                            for="tanggalPengeluaran"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >TANGGAL PENGELUARAN :</label
                        >
                        <litepie-datepicker
                            class="border-2 border-opacity-75"
                            as-single
                            v-model="tanggalPengeluaran"
                        >
                        </litepie-datepicker>
                    </div>
                    <button
                        class="
                            w-full
                            bg-goblin
                            focus:bg-red-700
                            text-white
                            font-bold
                            rounded-lg
                            py-2
                            px-3
                        "
                    >
                        TAMBAH DATA
                    </button>
                </form>
            </div>
        </div>
    </main>
</template>

<script>
import { ref } from "vue";

export default {
    setup() {
        const tanggalPengeluaran = ref([]);

        return {
            tanggalPengeluaran,
        };
    },
};
</script>
