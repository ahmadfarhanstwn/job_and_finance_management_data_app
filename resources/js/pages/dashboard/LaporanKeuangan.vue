<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 mr-4 my-8 p-2">
            <div class="flex flex-row justify-start mb-4">
                <div
                    class="
                        bg-greenforest
                        rounded-lg
                        w-1/4
                        h-32
                        flex flex-col
                        mr-2
                    "
                >
                    <h1
                        class="
                            text-madrid text-center text-lg
                            font-bold
                            mb-2
                            mt-4
                        "
                    >
                        JUMLAH PEMASUKAN
                    </h1>
                    <h1 class="text-black text-center text-xl font-bold">
                        RP. {{ jumlahPemasukan }}
                    </h1>
                </div>
                <div class="bg-munyuk rounded-lg w-1/4 h-32 flex flex-col mr-2">
                    <h1
                        class="
                            text-madrid text-center text-lg
                            font-bold
                            mb-2
                            mt-4
                        "
                    >
                        JUMLAH PENGELUARAN
                    </h1>
                    <h1 class="text-black text-center text-xl font-bold">
                        RP. {{ jumlahPengeluaran }}
                    </h1>
                </div>
                <div class="bg-tai rounded-lg w-1/4 h-32 flex flex-col mr-2">
                    <h1
                        class="
                            text-navbar text-center text-lg
                            font-bold
                            mb-2
                            mt-4
                        "
                    >
                        LABA BERSIH
                    </h1>
                    <h1 class="text-black text-center text-xl font-bold">
                        RP. {{ labaBersih }}
                    </h1>
                </div>
                <div
                    class="bg-chelsea rounded-lg w-1/4 h-32 flex flex-col mr-2"
                >
                    <h1
                        class="
                            text-madrid text-center text-lg
                            font-bold
                            mb-2
                            mt-4
                        "
                    >
                        JUMLAH PEKERJAAN
                    </h1>
                    <h1 class="text-black text-center text-xl font-bold">
                        {{ jumlahPekerjaan }}
                    </h1>
                </div>
            </div>
            <div class="flex justify-end mb-2">
                <a type="button" href="/api/exportKeuangan">
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
            <div class="w-full h-full bg-madrid rounded-lg p-4">
                <h1 class="font-bold mb-2">DATA KEUANGAN</h1>
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
                                Nama Transaksi
                            </th>
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
                                Tipe Transaksi
                            </th>
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
                                Jumlah
                            </th>
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
                                Tanggal Transaksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-madrid">
                        <tr v-for="keuangan in dataKeuangan" :key="keuangan.id">
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    {{ keuangan.nama_transaksi }}
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
                                <span
                                    class="
                                        relative
                                        inline-block
                                        px-3
                                        py-1
                                        font-semibold
                                        text-green-900
                                        leading-tight
                                    "
                                >
                                    <span
                                        aria-hidden
                                        v-if="
                                            keuangan.keterangan_transaksi ===
                                            'Pengeluaran'
                                        "
                                        class="
                                            absolute
                                            inset-0
                                            bg-munyuk
                                            opacity-50
                                            rounded-full
                                        "
                                    ></span>
                                    <span
                                        aria-hidden
                                        v-else
                                        class="
                                            absolute
                                            inset-0
                                            bg-goblin
                                            opacity-50
                                            rounded-full
                                        "
                                    ></span>
                                    <span class="relative text-xs">{{
                                        keuangan.keterangan_transaksi
                                    }}</span></span
                                >
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    Rp. {{ keuangan.jumlah_transaksi }}
                                </div>
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    {{ keuangan.created_at.slice(0, 10) }}
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
import Pagination from "v-pagination-3";
import SideMenu from "../../components/SideMenu.vue";
export default {
    data() {
        return {
            currentPage: 0,
            perPage: 0,
            total: 0,
            jumlahPemasukan: 0,
            jumlahPengeluaran: 0,
            jumlahPekerjaan: 0,
            labaBersih: 0,
            dataKeuangan: [],
        };
    },
    components: {
        SideMenu,
        Pagination,
    },
    created() {
        this.currentPage = 1;
        this.getResult(this.currentPage);
        this.$axios
            .get("api/getMonthlyIncome")
            .then((response) => {
                this.jumlahPemasukan = response.data;
            })
            .catch(function (error) {
                console.log(error);
            });
        this.$axios
            .get("api/pengeluaranBulanIni")
            .then((response) => {
                this.jumlahPengeluaran = response.data;
                this.labaBersih = this.jumlahPemasukan - this.jumlahPengeluaran;
            })
            .catch(function (error) {
                console.log(error);
            });
        this.$axios
            .get("api/getMonthlyClient")
            .then((response) => {
                this.jumlahPekerjaan = response.data;
            })
            .catch(function (error) {
                console.log(error);
            });
        // this.getLabaBersih(this.jumlahPemasukan, this.jumlahPengeluaran);
    },
    methods: {
        onPageClick(event) {
            this.currentPage = event;
            this.getResult(this.currentPage);
        },
        getResult(page = 1) {
            this.$axios
                .get(`api/getKeuangan?page=${page}`)
                .then((response) => {
                    var responseData = response.data;
                    this.currentPage = responseData.data.current_page;
                    this.perPage = responseData.data.per_page;
                    this.total = responseData.data.total;
                    this.dataKeuangan = responseData.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
    },
};
</script>
