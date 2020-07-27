<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;

class KaryawanModel extends User
{
  use Notifiable;
  protected $guard = "karyawan";
  protected $table = "karyawan";
  protected $primaryKey = "id";
  protected $keyType = "string";
  protected $fillable = [
    "user", "password", "nama", "kelamin", "alamat",
    "tanggal_lahir", "nomor_telepon", "foto"
  ];
  protected $hidden =[
    "password", "remember_token"
  ]
}
