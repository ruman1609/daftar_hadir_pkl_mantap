<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\KaryawanModel as Karyawan;
use App\AbsenModel as Absen;

class DashboardAdminController extends Controller
{
  public function first(){
    DB::beginTransaction();
    try {
      $data = Karyawan::get();
      foreach($data as $d){
        $abs = Absen::get();
        if(count($abs)>0){
          $masuk = Absen::where("tanggal_absen", date("Y-m-d"))->where("id_karyawan", $d->user)->get();
          if(count($masuk)==0){$this->absenBaru($d);}
        }else{$this->absenBaru($d);}
      }
      DB::commit();
      return view("admin.dashboardAdmin");
    } catch (\Exception $e) {
      DB::rollback();
      return view("admin.dashboardAdmin")->with("dbERROR", "Database tidak berjalan");
    }
  }
  function absenBaru($d){
    $baru = new Absen;
    $baru->tanggal_absen = date("Y-m-d");
    $baru->id_karyawan = $d->user;
    $baru->kehadiran = false;
    $baru->save();
  }
}
