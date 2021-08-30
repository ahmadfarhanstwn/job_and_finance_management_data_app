<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pengeluaran", function (Blueprint $table) {
            $table->id();
            $table->string("nama_pengeluaran");
            $table->string("detail_pengeluaran");
            $table->string("kategori_pengeluaran");
            $table->bigInteger("jumlah_pengeluaran");
            $table->string("penanggungjawab");
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
        Schema::dropIfExists("pengeluarans");
    }
}
