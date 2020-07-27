<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;

class AdminModel extends User
{
  use Notifiable;
  protected $guard = "admin";
  protected $table = "admin";
  protected $primaryKey = "user";
  protected $keyType = "string";
  protected $fillable = [
    "user", "password"
  ];
  protected $hidden =[
    "password"
  ];
}
