<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLogbook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbook', function (Blueprint $table) {
          $table->bigIncrements("id");
          $table->date("tanggal_absen");
          $table->string("id_karyawan");
          $table->text("logbook");
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
        Schema::dropIfExists('logbook');
    }
}
