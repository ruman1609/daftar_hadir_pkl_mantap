<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KaryawanModel as Karyawan;

class LogbookModel extends Model
{
    //
    protected $table = "logbook";
    protected $fillable = ['logbook', "id_karyawan", "tanggal_absen"];
}
