<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengumumanModel as Pengumuman;
use App\LogbookModel as Logbook;

class KaryawanController extends Controller
{
    public function index(){
        //$karyawan = Auth::user()->id;
        $pengumuman = Pengumuman::paginate(10);
        $logbook = Logbook::orderBy('tanggal_absen','desc')->paginate(10);


        return view('karyawan.dashboardKaryawan', compact('pengumuman','logbook')); //['karyawan' => $karyawan],
    }

    // public function pengumuman(){
    //     $pengumuman = Pengumuman::paginate(10);
        
    //     return view('karyawan.karyawan',['pengumuman' => $pengumuman]);
    // }

    public function absen(){
        return view('karyawan.absen');
    }
}
