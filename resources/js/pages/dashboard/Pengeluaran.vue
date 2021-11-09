<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 mr-4 my-8 p-2">
            <div class="flex flex-row justify-start">
                <router-link :to="{ name: 'tambahpengeluaran' }">
                    <div
                        class="
                            w-72
                            h-8
                            rounded-lg
                            bg-maroon
                            flex flex-row
                            p-1
                            mb-2
                            mr-2
                        "
                    >
                        <img
                            src="../../assets/add.png"
                            class="h-6 mr-2"
                            alt=""
                        />
                        <h1 class="text-madrid text-base">
                            TAMBAH DATA PENGELUARAN
                        </h1>
                    </div>
                </router-link>
                <a type="button" href="/api/exportPengeluaran">
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
                        <h1 class="text-madrid text-base">EXPORT KE EXCEL</h1>
                    </button>
                </a>
            </div>
            <div
                class="max-w-full h-full rounded-lg bg-madrid p-6 overflow-auto"
            >
                <h1 class="font-bold mb-2">DATA PENGELUARAN</h1>
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
                                Nama Pengeluaran
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
                                Detail Pengeluaran
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
                                Kategori
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
                                Jumlah Pengeluaran
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
                                Penanggungjawab
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
                                Tanggal Pengeluaran
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-madrid">
                        <tr
                            v-for="pengeluaran in dataPengeluaran"
                            :key="pengeluaran.id"
                        >
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    {{ pengeluaran.nama_pengeluaran }}
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
                                {{ pengeluaran.detail_pengeluaran }}
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
                                {{ pengeluaran.kategori_pengeluaran }}
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
                                Rp. {{ pengeluaran.jumlah_pengeluaran }}
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
                                {{ pengeluaran.penanggungjawab }}
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
                                {{ pengeluaran.created_at.slice(0, 10) }}
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
import Pagination from "v-pagination-3";
import SideMenu from "../../components/SideMenu.vue";
export default {
    data() {
        return {
            currentPage: 0,
            perPage: 0,
            total: 0,
            dataPengeluaran: [],
        };
    },
    components: {
        SideMenu,
        Pagination,
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
            this.$axios
                .get(`api/getPengeluaran?page=${page}`)
                .then((response) => {
                    var responseData = response.data;
                    this.currentPage = responseData.data.current_page;
                    this.perPage = responseData.data.per_page;
                    this.total = responseData.data.total;
                    this.dataPengeluaran = responseData.data.data;
                    console.log(this.dataPengeluaran);
                })
                .catch(function (error) {
                    console.log(error);
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
