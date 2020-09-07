<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException as E404;
use App\PengumumanModel as Pengumuman;

class PengumumanController extends Controller
{
  function show(){
    return view("admin.setPengumuman");
  }
  function buatPeng($req, $peng){
    $peng->judul = $req->judul;
    $peng->isi = $req->isi;
    $peng->save();
    DB::commit();
  }
  function post(Request $req){
    DB::beginTransaction();
    try {
      $valid = $req->validate([
        "judul" => ["required", "max:200"],
        "isi" => ["required"]
      ]);
      $peng = Pengumuman::findOrFail(1);
      $this->buatPeng($req, $peng);
      return redirect("/admin")->with("berhasil", "Pengumuman Berhasil di Update");
    } catch(E404 $e){
      $peng = new Pengumuman;
      $this->buatPeng($req, $peng);
      return redirect("/admin")->with("berhasil", "Pengumuman Berhasil di Update");
    } catch (\Exception $e) {
      DB::rollback();
      return back()->with("error", $e->getMessage());
    }
  }
}
