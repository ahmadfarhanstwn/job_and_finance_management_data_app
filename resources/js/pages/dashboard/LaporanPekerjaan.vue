<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 mr-4 my-8 p-2">
            <div
                class="max-w-full h-full rounded-lg bg-madrid p-6 overflow-auto"
            >
                <h1 class="font-bold mb-2">LAPORAN PEKERJAAN</h1>
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
                                Nama Pelanggan
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
                                Kontak Pelanggan
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
                                Harga
                            </th>
                            <!-- <th
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
                                Nama Teknisi
                            </th> -->
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
                                Tanggal Datang
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
                                Tanggal Selesai
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
                                Cetak
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-madrid">
                        <tr v-for="riwayat in dataRiwayat" :key="riwayat.id">
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    {{ riwayat.nama_pekerjaan }}
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
                                {{ riwayat.deskripsi_pekerjaan }}
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
                                {{ riwayat.nama_pelanggan }}
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
                                {{ riwayat.kontak_pelanggan }}
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
                                Rp. {{ riwayat.harga }}
                            </td>
                            <!-- <td
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
                                Yanto
                            </td> -->
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
                                {{ riwayat.tanggal_datang }}
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
                                {{ riwayat.tanggal_selesai }}
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
                                <button
                                    class="
                                        bg-chelsea
                                        rounded-md
                                        text-madrid
                                        outline-none
                                        flex flex-row
                                        w-32
                                        p-1
                                        mr-2
                                    "
                                    @click="
                                        download(
                                            riwayat.deskripsi_pekerjaan,
                                            riwayat.nama_pelanggan,
                                            riwayat.harga
                                        )
                                    "
                                >
                                    <img
                                        src="../../assets/print.png"
                                        class="h-6 mr-1"
                                        alt=""
                                    />
                                    <h1 class="font-bold py-1">CETAK NOTA</h1>
                                </button>
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
import { jsPDF } from "jspdf";
export default {
    data() {
        return {
            currentPage: 0,
            perPage: 0,
            total: 0,
            dataRiwayat: [],
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
                .get(`api/getRiwayat?page=${page}`)
                .then((response) => {
                    var responseData = response.data;
                    this.currentPage = responseData.data.current_page;
                    this.perPage = responseData.data.per_page;
                    this.total = responseData.data.total;
                    this.dataRiwayat = responseData.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        download(namaPekerjaan, namaPelanggan, Harga) {
            var doc = new jsPDF("p", "mm", [123, 90]);
            doc.setFontSize(12);
            doc.setTextColor("#920003");
            doc.text("Bengkel Bubut & Las", 5, 5);
            doc.setFontSize(14);
            doc.text('"SEKAWAN"', 8, 10);
            doc.setFontSize(6);
            doc.text("Menerima dan memperbaiki alat-alat", 5, 13);
            doc.text("Mesin & Kendaraan bermotor dll.", 7, 15);
            doc.text("Jl. Siliwangi Blk.30A Tlp.0251-8380-385", 5, 17);
            doc.setFontSize(8);
            const today = new Date();
            const date =
                today.getDate() +
                " - " +
                (today.getMonth() + 1) +
                " - " +
                today.getFullYear();
            doc.text("Bogor, " + date, 55, 7);
            doc.text("Kepada Yth", 60, 10);
            doc.text(namaPelanggan, 55, 13);
            doc.setDrawColor("#920003");
            doc.line(3, 20, 87, 20);
            doc.line(3, 25, 87, 25);
            doc.line(3, 90, 87, 90);
            doc.line(10, 20, 10, 90);
            doc.line(65, 20, 65, 90);
            doc.text("No.", 5, 23);
            doc.text("NAMA PEKERJAAN", 20, 23);
            doc.text("Harga", 75, 23);
            doc.text("1", 5, 28);
            doc.text(namaPekerjaan, 13, 28);
            doc.text(String(Harga), 68, 28);
            doc.line(3, 95, 30, 95);
            doc.line(3, 95, 3, 103);
            doc.line(3, 103, 30, 103);
            doc.line(30, 95, 30, 103);
            doc.setFontSize(4);
            doc.text("PERHATIAN", 11, 97);
            doc.text("Barang atau pesanan tidak diambil", 5, 99);
            doc.text("selama 3 bulan dianggap hilang", 6, 101);
            doc.setFontSize(6);
            doc.text("Hormat Kami,", 60, 97);
            doc.output("dataurlnewwindow");
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
