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
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->id('idkeluar');
            $table->unsignedBigInteger('idbarang');
            $table->foreign('idbarang')->references('id')->on('pemasukans');
            $table->string('namabarang');
            $table->timestamp('tanggal');
            $table->string('deskripsi');
            $table->string('penerima');
            $table->integer('stock');
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
        Schema::dropIfExists('pengeluarans');
    }
}
