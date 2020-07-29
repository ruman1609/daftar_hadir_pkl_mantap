<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\KaryawanModel as Karyawan;
use App\AbsenModel as Absen;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      DB::beginTransaction();
      try {
        $kar = Karyawan::get();
        DB::commit();
        return view("admin.rekapAdmin", ["data"=>$kar]);
      } catch (\Exception $e) {
        DB::rollback();
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      DB::beginTransaction();
      try {
        $abs = Absen::join("karyawan", "karyawan.user", "=", "absen.id_karyawan")  // join("nama tabel yang dituju", "trigger parent", "trigger yang dituju")
        ->where("id_karyawan", $id)->select("karyawan.nama", "absen.*")->orderBy("absen.tanggal_absen", "asc")->paginate(5);
        $bulan = Absen::where("id_karyawan", $id)->select(DB::raw("month(tanggal_absen) bulan"))->orderBy("bulan", "asc")->distinct()->get();
        DB::commit();
        return view("admin.hasilRekap", ["data"=>$abs, "bulan"=>$bulan]);
      } catch (\Exception $e) {
        DB::rollback();
        return $e;
      }
    }
    public function liatBulan($id, $month){
      DB::beginTransaction();
      try {
        $abs = Absen::where(DB::raw("month(tanggal_absen)"), $month)->where("id_karyawan", $id)->paginate(5);
        $bulan = Absen::where("id_karyawan", $id)->select(DB::raw("month(tanggal_absen) bulan"))->orderBy("bulan", "asc")->distinct()->get();
        // kalau ada month mesti DB::raw()
        DB::commit();
        return view("admin.hasilRekap", ["data"=>$abs, "bulan"=>$bulan, "back"=>"BACK"]);
      } catch (\Exception $e) {
        DB::rollback();
        return $e;
      }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
