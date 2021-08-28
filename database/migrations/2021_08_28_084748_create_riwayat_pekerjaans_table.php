<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("riwayat_pekerjaans", function (Blueprint $table) {
            $table->id();
            $table->string("nama_pekerjaan");
            $table->string("deskripsi_pekerjaan");
            $table->string("nama_pelanggan");
            $table->string("kontak_pelanggan");
            $table->bigInteger("harga");
            $table->date("tanggal_datang");
            $table->date("tanggal_selesai");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("riwayat_pekerjaans");
    }
}
