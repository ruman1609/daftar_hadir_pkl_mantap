<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
          $table->string("id", 11);
          $table->text("pass");
          $table->string("nama", 101);
          $table->boolean("kelamin");
          $table->text("alamat");
          $table->date("tanggal_lahir");
          $table->string("nomor_telepon", 21);
          $table->text("foto");
          $table->timestamps();
          $table->rememberToken();
          $table->primary("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
