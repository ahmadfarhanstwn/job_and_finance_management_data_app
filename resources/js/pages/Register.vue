<template>
    <div class="flex justify-center mt-4 mb-4">
        <img class="object-contain h-20" src="../assets/logo.svg" />
    </div>
    <div class="text-center">
        <h1 class="text-base font-black">
            Silahkan Register Untuk Melakukan Login
        </h1>
    </div>
    <div class="flex justify-center m-4">
        <div
            class="
                container
                max-w-sm
                bg-loginbox
                rounded-xl
                p-4
                overflow-hidden
                place-self-center
                shadow-xl
            "
        >
            <form>
                <div class="mb-2">
                    <label
                        for="nama"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Nama :</label
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
                        id="nama"
                        v-model="nama"
                        placeholder="Masukkan Nama"
                        required
                        autofocus
                    />
                </div>
                <div class="mb-2">
                    <label
                        for="email"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Email :</label
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
                        id="email"
                        v-model="email"
                        placeholder="Masukkan Email"
                        required
                    />
                </div>
                <div class="mb-2">
                    <label
                        for="password"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Password :</label
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
                        type="password"
                        id="password"
                        v-model="password"
                        placeholder="Masukkan Password"
                        required
                        autofocus
                    />
                </div>
                <div class="mb-2">
                    <label
                        for="role"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Role :</label
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
                        v-model="role"
                        aria-placeholder="Pilih Role"
                    >
                        <option value="Admin">Admin</option>
                        <option value="Pekerja">Pekerja</option>
                        <option value="Pemilik">Pemilik</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label
                        for="jabatan"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Jabatan :</label
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
                        id="jabatan"
                        v-model="jabatan"
                        placeholder="Masukkan Jabatan"
                        required
                        autofocus
                    />
                </div>
                <button
                    class="
                        w-full
                        bg-maroon
                        focus:bg-red-700
                        text-white
                        font-bold
                        rounded-lg
                        py-2
                        px-3
                    "
                    @click="handleSubmit"
                >
                    Buat Akun
                </button>
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
                <p class="text-center mt-4 text-sm">
                    Sudah Punya Akun? Login
                    <router-link class="text-maroon" :to="{ name: 'login' }"
                        >Disini</router-link
                    >
                </p>
            </form>
        </div>
    </div>
    <footer class="font-bold text-center">
        Copyright @2021 - Bengkel Las & Bubut "SEKAWAN"
    </footer>
</template>

<script>
export default {
    data() {
        return {
            nama: "",
            email: "",
            password: "",
            role: "",
            jabatan: "",
            error: null,
        };
    },
    methods: {
        handleSubmit(e) {
            e.preventDefault();
            if (this.password.length > 0) {
                this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                    this.$axios
                        .post("api/register", {
                            nama: this.nama,
                            email: this.email,
                            password: this.password,
                            role: this.role,
                            jabatan: this.jabatan,
                        })
                        .then((response) => {
                            if (response.data.success) {
                                window.location.href = "/";
                            } else {
                                this.error = response.data.message;
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                });
            }
        },
    },
    beforeRouteEnter(to, from, next) {
        if (window.Laravel.isLoggedin) {
            return next("home");
        }
        next();
    },
};
</script>
