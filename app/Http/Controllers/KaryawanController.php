<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PengumumanModel as Pengumuman;
use App\LogbookModel as Logbook;
use App\AbsenModel as Absen;
use App\Http\Controllers\DashboardAdminController as Buat;
use Auth;

class KaryawanController extends Controller
{
    public function index(){
      $buat = new Buat;
      $buat->buatAbsen();
      $pengumuman = Pengumuman::paginate(10);
      $logbook = Logbook::orderBy('tanggal_absen','desc')->paginate(10);


      return view('karyawan.dashboardKaryawan', compact('pengumuman','logbook'));  // ['karyawan' => $karyawan],
    }

    // public function pengumuman(){
    //     $pengumuman = Pengumuman::paginate(10);

    //     return view('karyawan.karyawan',['pengumuman' => $pengumuman]);
    // }

    public function absen(){
      $abs = Absen::where("tanggal_absen", date("Y-m-d"))->where("id_karyawan", Auth::user()->user)->first();
      $start = "10:00:00";
      $end = "11:00:00";
      $now = date("H:m:s");
      $disable = false;
      $sudah = $abs->kehadiran;
      if(strtotime($now) > strtotime($start) && strtotime($now) < strtotime($end)){
        if($sudah){$disable = true;}
      }
      else{$disable = true;}
      return view('karyawan.absen', ["disable" => $disable, "sudah" => $sudah]);
    }

    public function prosesAbsen(){
      DB::beginTransaction();
      try {
        $abs = Absen::where("tanggal_absen", date("Y-m-d"))->where("id_karyawan", Auth::user()->user)->first();
        $abs->kehadiran = true;
        $abs->save();
        DB::commit();
        return back()->with("Berhasil", "Anda sudah Absen");
      } catch (\Exception $e) {
        dd($e);
        DB::rollback();
        return back()->with("Berhasil", "Terjadi kesalahan");
      }

    }

}
