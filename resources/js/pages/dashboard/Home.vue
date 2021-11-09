<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 bg-red-400 mr-4 my-8 p-2">
            <div class="max-w-full rounded-lg bg-madrid p-6 mb-10">
                <h1 class="font-bold text-xl mb-3">
                    SELAMAT DATANG AHMAD FARHAN !
                </h1>
                <h1 class="text-base text-navbar mb-3">Selamat Bekerja!</h1>
                <h1 class="text-base text-navbar">
                    Gunakan sistem ini untuk mengelola data-data pekerjaan dan
                    keuangan. Anda bisa menginputkan data-data berupa data
                    pekerjaan dan data keuangan dalam sistem ini.
                </h1>
            </div>
            <div
                class="
                    max-w-full
                    rounded-lg
                    bg-madrid
                    p-6
                    max-h-72
                    overflow-y-scroll
                "
            >
                <h1 class="font-extrabold text-2xl mb-3">
                    PETUNJUK PENGGUNAAN SISTEM
                </h1>
                <div
                    class="max-w-full rounded-lg border-2 border-black p-3 mb-4"
                >
                    <div class="flex justify-center">
                        <img src="../../assets/dashboard.png" alt="" />
                    </div>
                    <h1 class="text-navbar font-bold mt-2 mb-4 text-center">
                        DASHBOARD
                    </h1>
                    <h1 class="text-navbar">
                        Menu Dashboard merupakan menu yang menampilkan data
                        berupa jumlah pekerjaan yang sedang aktif, jumlah
                        pemasukan hari ini, jumlah pemasukan bulan ini, dan
                        pekerjaan yang sedang mendekati deadline. Kunjungi menu
                        ini untuk melihat data-data penting yang dapat dilihat
                        secara singkat.
                    </h1>
                </div>
                <div
                    class="max-w-full rounded-lg border-2 border-black p-3 mb-4"
                >
                    <div class="flex justify-center">
                        <img src="../../assets/pekerjaan.png" alt="" />
                    </div>
                    <h1 class="text-navbar font-bold mt-2 mb-4 text-center">
                        PEKERJAAN AKTIF
                    </h1>
                    <h1 class="text-navbar">
                        Menu Pekerjaan Aktif merupakan menu yang menampilkan
                        data berupa jumlah pekerjaan yang sedang aktif, tertera
                        juga atribut-atribut data seperti Nama Pekerjaan,
                        Deskripsi Pekerjaan, Nama Pelanggan, Kontak Pelanggan,
                        Harga Pekerjaan, dan Tenggat Waktu Pekerjaan. Selain
                        menampilkan data, anda juga bisa menambah data baru,
                        mengupdate data, dan juga menghapus data yang ada.
                        Kunjungi menu ini untuk melihat data-data pekerjaan
                        aktif dan menambahkan data pekerjaan baru.
                    </h1>
                </div>
                <div
                    class="max-w-full rounded-lg border-2 border-black p-3 mb-4"
                >
                    <div class="flex justify-center">
                        <img src="../../assets/harga.png" alt="" />
                    </div>
                    <h1 class="text-navbar font-bold mt-2 mb-4 text-center">
                        HARGA PEKERJAAN
                    </h1>
                    <h1 class="text-navbar">
                        Menu Harga Pekerjaan merupakan menu yang menampilkan
                        data berupa jenis-jenis pekerjaan yang bisa dikerjakan
                        di Bengkel Las & Bubut "SEKAWAN", tertera juga
                        atribut-atribut data seperti Nama Pekerjaan, Deskripsi
                        Pekerjaan, Estimasi Harga Pekerjaan, dan Estimasi
                        Tenggat Waktu Pekerjaan. Selain menampilkan data, anda
                        juga bisa menambah data baru, mengimport data dari
                        Excel, mengupdate data, dan juga menghapus data yang
                        ada. Kunjungi menu ini untuk melihat data pekerjaan yang
                        dapat dikerjakan di Bengkel Las & Bubut "SEKAWAN",
                        melihat estimasi harga, serta melihat estimasi tenggat
                        waktu pekerjaan.
                    </h1>
                </div>
                <div
                    class="max-w-full rounded-lg border-2 border-black p-3 mb-4"
                >
                    <div class="flex justify-center">
                        <img src="../../assets/pengeluaran.png" alt="" />
                    </div>
                    <h1 class="text-navbar font-bold mt-2 mb-4 text-center">
                        PENGELUARAN
                    </h1>
                    <h1 class="text-navbar">
                        Menu Pengeluaran merupakan menu yang menampilkan data
                        pengeluaran yang telah dikeluarkan untuk berbagai
                        keperluan operasional, tertera juga atribut-atribut data
                        seperti Nama Pengeluaran, Detail Pengeluaran, Kategori
                        Pengeluaran, Jumlah Pengeluaran, Penanggungjawab, dan
                        Tanggal Dilakukannya Transaksi Pengeluaran. Hati-hati
                        ketika menginput data pengeluaran, karena data
                        pengeluaran yang telah diinputkan tidak bisa anda hapus
                        atau update, dan data yang telah diinputkan langsung
                        akan terekam di database. Kunjungi menu ini untuk
                        menginputkan data pengeluaran perusahaan.
                    </h1>
                </div>
                <div
                    class="max-w-full rounded-lg border-2 border-black p-3 mb-4"
                >
                    <div class="flex justify-center">
                        <img src="../../assets/pekerjaan.png" alt="" />
                    </div>
                    <h1 class="text-navbar font-bold mt-2 mb-4 text-center">
                        LAPORAN PEKERJAAN
                    </h1>
                    <h1 class="text-navbar">
                        Menu Laporan Pekerjaan merupakan menu yang menampilkan
                        data -data pekerjaan yang telah selesai dikerjakan dan
                        dibayar oleh pelanggan. Kunjungi menu ini untuk melihat
                        data-data riwayat pekerjaan yang telah selesai untuk
                        kepentingan genting, seperti komplain dari pelanggan dan
                        mencetak kembali nota.
                    </h1>
                </div>
                <div
                    class="max-w-full rounded-lg border-2 border-black p-3 mb-4"
                >
                    <div class="flex justify-center">
                        <img src="../../assets/pengeluaran.png" alt="" />
                    </div>
                    <h1 class="text-navbar font-bold mt-2 mb-4 text-center">
                        LAPORAN KEUANGAN
                    </h1>
                    <h1 class="text-navbar">
                        Menu Laporan Keuangan merupakan menu yang menampilkan
                        data keuangan perusahaan, seperti data pemasukan dan
                        juga data pengeluaran perusahaan. Anda bisa melihat
                        secara luas kondisi keuangan perusahaan melalui menu
                        ini. Kunjungi menu ini untuk melihat secara keseluruhan
                        bagaimana kondisi keuangan perusahaan.
                    </h1>
                </div>
                <div
                    class="max-w-full rounded-lg border-2 border-black p-3 mb-4"
                >
                    <div class="flex justify-center">
                        <img src="../../assets/pengguna.png" alt="" />
                    </div>
                    <h1 class="text-navbar font-bold mt-2 mb-4 text-center">
                        PENGGUNA
                    </h1>
                    <h1 class="text-navbar">
                        Menu Pengguna merupakan menu yang menampilkan data
                        pengguna yang terdaftar dalam sistem dan yang bisa
                        menggunakan sistem ini. Melalui menu ini, anda bisa
                        melihat data pengguna seperti Nama Pengguna, Role
                        Pengguna, dan Jabatan Pengguna secara lengkap. Kunjungi
                        menu ini untuk melihat pengguna yang terdaftar dalam
                        sistem.
                    </h1>
                </div>
            </div>
        </div>
    </main>
</template>
<script>
import SideMenu from "../../components/SideMenu.vue";
export default {
    components: {
        SideMenu,
    },
    beforeRouteEnter(to, from, next) {
        if (!window.Laravel.isLoggedin) {
            window.location.href = "/";
        }
        next();
    },
};
</script>
