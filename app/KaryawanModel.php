<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KaryawanModel extends Authenticatable
{
  use Notifiable;
  protected $guard = "karyawan";
  protected $table = "karyawan";
  protected $primaryKey = "user";
  protected $keyType = "string";
  protected $fillable = [
    "user", "password", "nama", "kelamin", "alamat", "tanggal_lahir", "nomor_telepon", "foto"
  ];
  protected $hidden =[
    'password', 'remember_token'
  ];

  // public function setPasswordAttribute($val){
  //   return $this->attributes['password'] = bcrypt($val);
  // }
}
