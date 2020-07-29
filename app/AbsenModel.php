<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenModel extends Model
{
  protected $table = "absen";
  protected $fillable = [
    "tanggal_absen", "id_karyawan", "kehadiran"
  ];
}
