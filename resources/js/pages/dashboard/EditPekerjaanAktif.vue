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
                    EDIT DATA PEKERJAAN AKTIF
                </h1>
                <form @submit.prevent="editPekerjaan" method="POST">
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
                            v-model="pekerjaanAktif.nama_pekerjaan"
                        >
                            <option
                                v-for="pekerjaan in namaPekerjaan"
                                :key="pekerjaan"
                                :value="pekerjaan"
                            >
                                {{ pekerjaan }}
                            </option>
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
                            v-model="pekerjaanAktif.deskripsi_pekerjaan"
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
                            v-model="pekerjaanAktif.nama_pelanggan"
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
                            v-model="pekerjaanAktif.kontak_pelanggan"
                            required
                            autofocus
                        />
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
                            v-model="pekerjaanAktif.harga"
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
                            :formatter="formatter"
                            v-model="pekerjaanAktif.deadline"
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
</template>

<script>
import { onMounted, ref } from "vue";
import axios from "axios";
export default {
    data() {
        return {
            pekerjaanAktif: {},
        };
    },
    created() {
        this.$axios.get("/sanctum/csrf-cookie").then((response) => {
            this.$axios
                .get(`/api/show/${this.$route.params.id}`)
                .then((response) => {
                    this.pekerjaanAktif = response.data.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        });
    },
    methods: {
        editPekerjaan() {
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .post(
                        `/api/update/${this.$route.params.id}`,
                        this.pekerjaanAktif
                    )
                    .then((response) => {
                        this.$router.push({ name: "pekerjaanAktif" });
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            });
        },
    },
    setup() {
        const dateValue = ref("");
        const namaPekerjaan = ref([]);
        const formatter = ref({
            date: "YYYY-MM-DD",
            month: "MM",
        });

        onMounted(() => {
            axios
                .get("http://localhost:8000/api/getNama")
                .then((response) => {
                    namaPekerjaan.value = response.data.data;
                })
                .catch((error) => {
                    console.log("Error");
                });
        });

        return {
            dateValue,
            namaPekerjaan,
            formatter,
        };
    },
    beforeRouteEnter(to, from, next) {
        if (!window.Laravel.isLoggedin) {
            window.location.href = "/";
        }
        next();
    },
};
</script>
