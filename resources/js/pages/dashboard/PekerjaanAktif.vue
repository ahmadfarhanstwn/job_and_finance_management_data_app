<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 mr-4 my-8 p-2">
            <router-link
                :to="{ name: 'tambahpekerjaanaktif' }"
                v-if="isAccepted"
            >
                <div
                    class="w-64 h-8 rounded-lg bg-maroon flex flex-row p-1 mb-4"
                >
                    <img src="../../assets/add.png" class="h-6 mr-2" alt="" />
                    <h1 class="text-madrid text-base">TAMBAH DATA PEKERJAAN</h1>
                </div>
            </router-link>
            <div
                class="max-w-full h-full rounded-lg bg-madrid p-6 overflow-auto"
            >
                <h1 class="font-bold mb-2">PEKERJAAN YANG SEDANG BERJALAN</h1>
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
                                Harga
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
                                Deadline
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
                                Status
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
                        <tr
                            v-for="pekerjaan in pekerjaanaktif"
                            :key="pekerjaan.id"
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
                                    {{ pekerjaan.nama_pekerjaan }}
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
                                {{ pekerjaan.deskripsi_pekerjaan }}
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
                                {{ pekerjaan.nama_pelanggan }}
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
                                {{ pekerjaan.kontak_pelanggan }}
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
                                Rp. {{ pekerjaan.harga }}
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
                                {{ pekerjaan.deadline }}
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
                                        class="
                                            absolute
                                            inset-0
                                            bg-goblin
                                            opacity-50
                                            rounded-full
                                        "
                                    ></span>
                                    <span class="relative text-xs"
                                        >Aktif</span
                                    ></span
                                >
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
                                    <button
                                        class="
                                            bg-goblin
                                            rounded-md
                                            text-madrid
                                            outline-none
                                            flex flex-row
                                            w-24
                                            p-1
                                            mr-2
                                        "
                                        v-if="isAccepted"
                                        @click="
                                            selesai(
                                                pekerjaan.id,
                                                pekerjaan.nama_pekerjaan,
                                                pekerjaan.deskripsi_pekerjaan,
                                                pekerjaan.nama_pelanggan,
                                                pekerjaan.kontak_pelanggan,
                                                pekerjaan.harga,
                                                pekerjaan.created_at,
                                                this.dateNow
                                            )
                                        "
                                    >
                                        <img
                                            src="../../assets/selesai.png"
                                            class="h-6 mr-1"
                                            alt=""
                                        />
                                        <h1 class="font-bold py-1">SELESAI</h1>
                                    </button>
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
                                                pekerjaan.deskripsi_pekerjaan,
                                                pekerjaan.nama_pelanggan,
                                                pekerjaan.harga
                                            )
                                        "
                                    >
                                        <img
                                            src="../../assets/print.png"
                                            class="h-6 mr-1"
                                            alt=""
                                        />
                                        <h1 class="font-bold py-1">
                                            CETAK NOTA
                                        </h1>
                                    </button>
                                    <router-link
                                        :to="{
                                            name: 'editpekerjaan',
                                            params: { id: pekerjaan.id },
                                        }"
                                        v-if="isAccepted"
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
                                        v-if="isAccepted"
                                        @click="deletePekerjaan(pekerjaan.id)"
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
import Pagination from "v-pagination-3";
import SideMenu from "../../components/SideMenu.vue";
import { jsPDF } from "jspdf";
export default {
    data() {
        return {
            currentPage: 0,
            perPage: 0,
            total: 0,
            dateNow: "",
            pekerjaanaktif: [],
            isAccepted: false,
        };
    },
    components: {
        SideMenu,
        Pagination,
    },
    created() {
        this.currentPage = 1;
        this.getResult(this.currentPage);
        this.getNow();
        if (
            window.Laravel.user.role == "Pemilik" ||
            window.Laravel.user.role == "Admin"
        ) {
            this.isAccepted = true;
        }
    },
    methods: {
        getNow() {
            const today = new Date();
            const date =
                today.getFullYear() +
                "-" +
                (today.getMonth() + 1) +
                "-" +
                today.getDate();
            this.dateNow = date;
        },
        onPageClick(event) {
            this.currentPage = event;
            this.getResult(this.currentPage);
        },
        getResult(page = 1) {
            this.$axios
                .get(`api/get?page=${page}`)
                .then((response) => {
                    var responseData = response.data;
                    this.currentPage = responseData.data.current_page;
                    this.perPage = responseData.data.per_page;
                    this.total = responseData.data.total;
                    this.pekerjaanaktif = responseData.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        selesai(
            id,
            nama_pekerjaan,
            deskripsi_pekerjaan,
            nama_pelanggan,
            kontak_pelanggan,
            harga,
            tanggal_datang,
            tanggal_selesai
        ) {
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .post(`/api/selesai/${id}`, {
                        nama_pekerjaan: nama_pekerjaan,
                        deskripsi_pekerjaan: deskripsi_pekerjaan,
                        nama_pelanggan: nama_pelanggan,
                        kontak_pelanggan: kontak_pelanggan,
                        harga: harga,
                        tanggal_datang: tanggal_datang.slice(0, 10),
                        tanggal_selesai: tanggal_selesai,
                    })
                    .then((response) => {
                        let i = this.pekerjaanaktif
                            .map((item) => item.id)
                            .indexOf(id); // find index of your object
                        this.pekerjaanaktif.splice(i, 1);
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            });
        },
        deletePekerjaan(id) {
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .delete(`/api/delete/${id}`)
                    .then((response) => {
                        let i = this.pekerjaanaktif
                            .map((item) => item.id)
                            .indexOf(id); // find index of your object
                        this.pekerjaanaktif.splice(i, 1);
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
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
