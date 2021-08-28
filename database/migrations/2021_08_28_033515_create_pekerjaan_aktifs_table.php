<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanAktifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pekerjaan_aktifs", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nama_pekerjaan");
            $table->string("deskripsi_pekerjaan");
            $table->string("nama_pelanggan");
            $table->string("kontak_pelanggan");
            $table->bigInteger("harga");
            $table->date("deadline");
            $table->string("status");
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
        Schema::dropIfExists("pekerjaan_aktifs");
    }
}
