<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaJasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("harga_jasas", function (Blueprint $table) {
            $table->id();
            $table->string("kode_pekerjaan");
            $table->string("nama_pekerjaan");
            $table->string("deskripsi_pekerjaan");
            $table->bigInteger("biaya_pekerjaan");
            $table->string("estimasi_waktu_pengerjaan");
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
        Schema::dropIfExists("harga_jasas");
    }
}
