<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 mr-4 my-8 p-2">
            <div class="flex flex-row justify-start">
                <router-link :to="{ name: 'tambahhargapekerjaan' }">
                    <div
                        class="
                            w-72
                            h-8
                            rounded-lg
                            bg-maroon
                            flex flex-row
                            p-1
                            mb-2
                            mr-20
                        "
                    >
                        <img
                            src="../../assets/add.png"
                            class="h-6 mr-2"
                            alt=""
                        />
                        <h1 class="text-madrid text-base">
                            TAMBAH HARGA PEKERJAAN
                        </h1>
                    </div>
                </router-link>
                <form @submit.prevent="proceedAction" method="POST">
                    <input
                        class="w-32 h-8 py-1 text-gray-700 leading-tight mr-2"
                        type="file"
                        @change="onFileChange"
                    />
                    <button
                        class="
                            w-64
                            h-8
                            rounded-lg
                            bg-goblin
                            flex flex-row
                            p-1
                            mb-2
                            mr-2
                        "
                    >
                        <img
                            src="../../assets/excel.png"
                            class="h-6 mr-2"
                            alt=""
                        />
                        <h1 class="text-madrid text-base">IMPORT DARI EXCEL</h1>
                    </button>
                </form>
            </div>
            <div class="flex flex-row justify-end mb-2">
                <h1 class="mr-2 mt-1">Cari :</h1>
                <input
                    v-model="keyword"
                    class="
                        w-52
                        h-6
                        rounded-lg
                        border-2 border-opacity-75 border-admin
                        py-2
                        px-2
                        text-gray-700
                        leading-tight
                        focus:outline-none focus:shadow-outline
                    "
                    type="search"
                    placeholder="Cari Data"
                />
            </div>
            <div
                class="max-w-full h-full rounded-lg bg-madrid p-6 overflow-auto"
            >
                <h1 class="font-bold mb-2">DATA HARGA PEKERJAAN</h1>
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
                                Kode Pekerjaan
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-xs
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
                                    text-left text-xs
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
                                    text-left text-xs
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Biaya Pekerjaan
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-xs
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Estimasi Waktu Pengerjaan
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-xs
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-madrid">
                        <tr v-for="harga in hargaJasa" :key="harga.id">
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    {{ harga.kode_pekerjaan }}
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
                                {{ harga.nama_pekerjaan }}
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
                                {{ harga.deskripsi_pekerjaan }}
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
                                Rp. {{ harga.biaya_pekerjaan }}
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
                                {{ harga.estimasi_waktu_pengerjaan }}
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
                                <div class="flex flex-row">
                                    <router-link
                                        :to="{
                                            name: 'edithargapekerjaan',
                                            params: { id: harga.id },
                                        }"
                                    >
                                        <div
                                            class="
                                                bg-tai
                                                rounded-md
                                                text-madrid
                                                outline-none
                                                flex flex-row
                                                w-24
                                                p-1
                                                mr-2
                                            "
                                        >
                                            <img
                                                src="../../assets/edit.png"
                                                class="h-6 mr-1"
                                                alt=""
                                            />
                                            <h1 class="font-bold py-1">EDIT</h1>
                                        </div>
                                    </router-link>
                                    <button
                                        class="
                                            bg-munyuk
                                            rounded-md
                                            text-madrid
                                            outline-none
                                            flex flex-row
                                            w-24
                                            p-1
                                            mr-2
                                        "
                                        @click="deleteHarga(harga.id)"
                                    >
                                        <img
                                            src="../../assets/delete.png"
                                            class="h-6 mr-1"
                                            alt=""
                                        />
                                        <h1 class="font-bold py-1">HAPUS</h1>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-center mt-3">
                    <pagination
                        v-model="currentPage"
                        :records="total"
                        :per-page="perPage"
                        @paginate="onPageClick($event)"
                    />
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import _ from "lodash";
import Pagination from "v-pagination-3";
import SideMenu from "../../components/SideMenu.vue";
export default {
    components: {
        SideMenu,
        Pagination,
    },
    data() {
        return {
            currentPage: 0,
            perPage: 0,
            total: 0,
            keyword: "",
            importFile: "",
            hargaJasa: [],
        };
    },
    created() {
        this.currentPage = 1;
        this.getResult(this.currentPage);
    },
    methods: {
        onPageClick(event) {
            this.currentPage = event;
            this.getResult(this.currentPage);
        },
        getResult(page = 1) {
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .post(`api/search?page=${page}`, {
                        keyword: this.keyword,
                    })
                    .then((response) => {
                        var responseData = response.data;
                        this.currentPage = responseData.data.current_page;
                        this.perPage = responseData.data.per_page;
                        this.total = responseData.data.total;
                        this.hargaJasa = responseData.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            });
        },
        deleteHarga(id) {
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .delete(`/api/deleteHarga/${id}`)
                    .then((response) => {
                        let i = this.hargaJasa
                            .map((item) => item.id)
                            .indexOf(id); // find index of your object
                        this.hargaJasa.splice(i, 1);
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            });
        },
        onFileChange(e) {
            this.importFile = e.target.files[0];
            console.log(this.importFile);
        },
        proceedAction() {
            let formData = new FormData();
            formData.append("file", this.importFile);

            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .post("api/import", formData)
                    .then((response) => {
                        this.$router.push({ name: "hargapekerjaan" });
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        },
    },
    watch: {
        keyword: _.debounce(function () {
            this.getResult();
        }, 500),
    },
    beforeRouteEnter(to, from, next) {
        if (!window.Laravel.isLoggedin) {
            window.location.href = "/";
        }
        next();
    },
};
</script>
