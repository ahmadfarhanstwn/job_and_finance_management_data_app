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
                    TAMBAH DATA HARGA PEKERJAAN
                </h1>
                <form @submit.prevent="addHarga">
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
                            v-model="kode_pekerjaan"
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
                            v-model="nama_pekerjaan"
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
                            v-model="deskripsi_pekerjaan"
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
                            v-model="biaya_pekerjaan"
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
                            v-model="estimasi_waktu_pengerjaan"
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
                        TAMBAH DATA
                    </button>
                </form>
                <div
                    role="alert"
                    class="
                        mt-2
                        w-full
                        bg-alert
                        border border-borderalert
                        text-red-700
                        px-3
                        py-2
                        rounded
                        relative
                    "
                    v-if="error != null"
                >
                    <p class="font-bold text-center">{{ error }}</p>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    data() {
        return {
            kode_pekerjaan: "",
            nama_pekerjaan: "",
            deskripsi_pekerjaan: "",
            biaya_pekerjaan: "",
            estimasi_waktu_pengerjaan: "",
            error: null,
        };
    },
    methods: {
        addHarga() {
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .post("api/addHarga", {
                        kode_pekerjaan: this.kode_pekerjaan,
                        nama_pekerjaan: this.nama_pekerjaan,
                        deskripsi_pekerjaan: this.deskripsi_pekerjaan,
                        biaya_pekerjaan: this.biaya_pekerjaan,
                        estimasi_waktu_pengerjaan:
                            this.estimasi_waktu_pengerjaan,
                    })
                    .then((response) => {
                        if (response.data.success) {
                            this.$router.push({ name: "hargapekerjaan" });
                        } else {
                            this.error = response.data.message;
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        },
    },
    beforeRouteEnter(to, from, next) {
        if (
            !window.Laravel.isLoggedin ||
            window.Laravel.user.role != "Pemilik"
        ) {
            window.location.href = "/";
        }
        next();
    },
};
</script>
