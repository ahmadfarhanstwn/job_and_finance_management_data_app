<template>
    <main>
        <div class="flex justify-center">
            <div class="bg-madrid w-2/3 h-auto p-4 rounded-lg m-4">
                <router-link :to="{ name: 'hargapekerjaan' }">
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
                    EDIT DATA HARGA PEKERJAAN
                </h1>
                <form @submit.prevent="editHarga" method="POST">
                    <div class="mb-2">
                        <label
                            for="kodepekerjaan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >KODE PEKERJAAN :</label
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
                            id="kodepekerjaan"
                            placeholder="Masukkan Kode Pekerjaan"
                            v-model="hargaPekerjaan.kode_pekerjaan"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="namapekerjaan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >NAMA PEKERJAAN :</label
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
                            id="namapekerjaan"
                            placeholder="Masukkan Nama Pekerjaan"
                            v-model="hargaPekerjaan.nama_pekerjaan"
                            required
                        />
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
                            v-model="hargaPekerjaan.deskripsi_pekerjaan"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="biayapekerjaan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >BIAYA PEKERJAAN :</label
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
                            id="biayapekerjaan"
                            placeholder="Masukkan Biaya Pekerjaan"
                            v-model="hargaPekerjaan.biaya_pekerjaan"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label
                            for="estimasiwaktupengerjaan"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >ESTIMASI WAKTU PENGERJAAN :</label
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
                            id="estimasiwaktupengerjaan"
                            placeholder="Masukkan Estimasi Waktu Pengerjaan"
                            v-model="hargaPekerjaan.estimasi_waktu_pengerjaan"
                            required
                        />
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
                        EDIT DATA
                    </button>
                </form>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    data() {
        return {
            hargaPekerjaan: {},
        };
    },
    created() {
        this.$axios.get("/sanctum/csrf-cookie").then((response) => {
            this.$axios
                .get(`/api/showHarga/${this.$route.params.id}`)
                .then((response) => {
                    this.hargaPekerjaan = response.data.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        });
    },
    methods: {
        editHarga() {
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .post(
                        `/api/updateHarga/${this.$route.params.id}`,
                        this.hargaPekerjaan
                    )
                    .then((response) => {
                        this.$router.push({ name: "hargapekerjaan" });
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        },
    },
    beforeRouteEnter(to, from, next) {
        if (!window.Laravel.isLoggedin) {
            window.location.href = "/";
        }
        next();
    },
};
</script>
