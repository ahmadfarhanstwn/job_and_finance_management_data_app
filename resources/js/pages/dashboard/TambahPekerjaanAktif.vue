<template>
    <main>
        <div class="flex justify-center">
            <div class="bg-madrid w-2/3 h-auto p-4 rounded-lg m-4">
                <router-link :to="{ name: 'pekerjaanAktif' }">
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
                    TAMBAH DATA PEKERJAAN AKTIF
                </h1>
                <form>
                    <div class="mb-2">
                        <label
                            for="namapekerjaan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >NAMA PEKERJAAN :</label
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
                            aria-placeholder="NAMA PEKERJAAN"
                        >
                            <option value="">Bubut As</option>
                            <!-- <option value="Pekerja">Pekerja</option>
                        <option value="Pemilik">Pemilik</option> -->
                        </select>
                    </div>
                    <div class="mb-2">
                        <label
                            for="deskripsipekerjaan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >DESKRIPSI PEKERJAAN :</label
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
                            id="deskripsipekerjaan"
                            placeholder="Masukkan Deskripsi Pekerjaan"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="namapelanggan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >NAMA PELANGGAN :</label
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
                            id="namapelanggan"
                            placeholder="Masukkan Nama Pelanggan"
                            required
                            autofocus
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="kontakpelanggan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >KONTAK PELANGGAN :</label
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
                            id="kontakpelanggan"
                            placeholder="Masukkan Kontak Pelanggan"
                            required
                            autofocus
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="namateknisi"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >NAMA TEKNISI :</label
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
                            aria-placeholder="NAMA TEKNISI"
                        >
                            <option value="">Yanto</option>
                            <!-- <option value="Pekerja">Pekerja</option>
                        <option value="Pemilik">Pemilik</option> -->
                        </select>
                    </div>
                    <div class="mb-2">
                        <label
                            for="hargapekerjaan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >HARGA PEKERJAAN :</label
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
                            id="hargapekerjaan"
                            placeholder="Masukkan Harga Pekerjaan"
                            required
                            autofocus
                        />
                    </div>
                    <!-- DEADLINE CALENDAR -->
                    <div class="mb-2">
                        <label
                            for="deadline"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >DEADLINE :</label
                        >
                        <litepie-datepicker
                            class="border-2 border-opacity-75"
                            as-single
                            v-model="dateValue"
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
                        SIMPAN DATA
                    </button>
                </form>
            </div>
        </div>
    </main>
    <!-- > -->
</template>

<script>
import { ref } from "vue";

export default {
    setup() {
        const dateValue = ref([]);

        return {
            dateValue,
        };
    },
};
</script>
