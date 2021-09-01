<template>
    <div class="flex justify-center mt-8 mb-8">
        <img class="object-contain h-20" src="../assets/logo.svg" />
    </div>
    <div class="text-center">
        <h1 class="text-xl font-black">Selamat Datang!</h1>
        <h4>Silahkan Login Untuk Melanjutkan</h4>
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
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="email"
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
                        autofocus
                    />
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="password"
                        >Password :</label
                    >
                    <input
                        class="
                            border-solid border-2
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
                    Sign In
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
            <p class="text-center mt-4 text-sm">
                Belum Punya Akun? Register
                <router-link class="text-maroon" :to="{ name: 'register' }"
                    >Disini</router-link
                >
            </p>
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
            email: "",
            password: "",
            error: null,
        };
    },
    methods: {
        handleSubmit(e) {
            e.preventDefault();
            if (this.password.length > 0) {
                this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                    this.$axios
                        .post("api/login", {
                            email: this.email,
                            password: this.password,
                        })
                        .then((response) => {
                            console.log(response.data);
                            if (response.data.success) {
                                this.$router.go("/home");
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
        if (window.Laravel.isLoggedIn) {
            return next("home");
        }
        next();
    },
};
</script>
