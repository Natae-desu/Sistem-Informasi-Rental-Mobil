<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpesan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pelanggan_id');
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
            $table->unsignedBigInteger('supir_id');
            $table->foreign('supir_id')->references('id')->on('tblsupir');
            $table->unsignedBigInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('tblmobil');
            $table->date('ambil');
            $table->date('deadline');
            $table->date('kembali');
            $table->enum('status',['pen','pak','sel']);
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
        Schema::dropIfExists('tblpesan');
    }
}
