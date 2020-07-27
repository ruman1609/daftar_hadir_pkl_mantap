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
          $table->string("user", 11);
          $table->text("password");
          $table->string("nama", 101);
          $table->boolean("kelamin");
          $table->text("alamat");
          $table->date("tanggal_lahir");
          $table->string("nomor_telepon", 21);
          $table->text("foto");
          $table->timestamps();
          $table->rememberToken();
          $table->primary("user");
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
