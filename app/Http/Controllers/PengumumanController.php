<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PengumumanModel as Pengumuman;

class PengumumanController extends Controller
{
  function show(){
    return view("admin.setPengumuman");
  }
  function post(Request $req){
    DB::beginTransaction();
    try {
      $valid = $req->validate([
        "judul" => ["required", "max:200"],
        "isi" => ["required"]
      ]);
      $peng = Pengumuman::find(1);
      $peng->judul = $req->judul;
      $peng->isi = $req->isi;
      $peng->save();
      DB::commit();
      return redirect("/admin")->with("berhasil", "Pengumuman Berhasil di Update");
    } catch (\Exception $e) {
      DB::rollback();
      return back()->with("error", $e->getMessage());
    }

  }
}
