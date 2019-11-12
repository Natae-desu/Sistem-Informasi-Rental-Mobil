<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblmobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblmobil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode',5);
            $table->string('merek',50);
            $table->string('type',50);
            $table->string('tahun',4);
            $table->string('bbm',50);
            $table->string('harga',50);
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
        Schema::dropIfExists('tblmobil');
    }
}
