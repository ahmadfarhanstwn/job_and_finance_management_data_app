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
                    TAMBAH DATA PENGELUARAN
                </h1>
                <form @submit.prevent="addData">
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
                            v-model="nama_pengeluaran"
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
                            v-model="detail_pengeluaran"
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
                            v-model="kategori_pengeluaran"
                        >
                            <option value="Keperluan Operasional">
                                Keperluan Operasional
                            </option>
                            <option value="Perawatan Mesin">
                                Perawatan Mesin
                            </option>
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
                            v-model="jumlah_pengeluaran"
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
                            v-model="penanggungjawab"
                        >
                            <option
                                v-for="user in dataUser"
                                :key="user"
                                :value="user"
                            >
                                {{ user }}
                            </option>
                        </select>
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
import { onMounted, ref } from "vue";
import axios from "axios";

export default {
    data() {
        return {
            nama_pengeluaran: "",
            detail_pengeluaran: "",
            kategori_pengeluaran: "",
            jumlah_pengeluaran: "",
            penanggungjawab: "",
        };
    },
    methods: {
        addData() {
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .post("api/addPengeluaran", {
                        nama_pengeluaran: this.nama_pengeluaran,
                        detail_pengeluaran: this.detail_pengeluaran,
                        kategori_pengeluaran: this.kategori_pengeluaran,
                        jumlah_pengeluaran: this.jumlah_pengeluaran,
                        penanggungjawab: this.penanggungjawab,
                    })
                    .then((response) => {
                        this.$router.push({ name: "pengeluaran" });
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        },
    },
    setup() {
        const dataUser = ref([]);

        onMounted(() => {
            axios
                .get("http://localhost:8000/api/getNamaPengguna")
                .then((response) => {
                    dataUser.value = response.data.data;
                })
                .catch((error) => {
                    console.log("Error");
                });
        });

        return {
            dataUser,
        };
    },
};
</script>
