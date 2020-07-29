<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\KaryawanModel as Karyawan;
use App\AbsenModel as Absen;

class AdministratorController extends Controller
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
        $data = Karyawan::orderBy("user", "asc")->paginate(10);
        $ada = (count($data) > 0) ? true : false;
        DB::commit();
        return view("admin.dataKaryawan", ["data"=>$data, "ada" => $ada]);
      } catch (\Exception $e) {
        DB::rollback();
        return back()->with("dbError", "Terjadi Kesalahan");
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.buatKaryawan");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req){
      DB::beginTransaction();
      try {
        $valid = $req->validate([
          "user" => ["required", "size:10", "unique:karyawan"],
          "password" => ["required", "min:5"],
          "nama" => ["required", "max:100", "regex:/[a-zA-Z]+$/u"],
          "kelamin" => ["required"],
          "alamat" => ["required"],
          "tanggal_lahir" => ["required"],
          "nomor_telepon" => ["required", "min:9", "max: 13"],
          "foto" => ["mimes:jpeg,png", "required"]
        ]);  // foto dimensions belum sempurna
        $filename = $req->user.".".$req->foto->getClientOriginalExtension();
        $req->foto->storeAs("\public", $filename);
        $kar = new Karyawan;
        $kar->user = $req->user;
        $pass = Hash::make($req->password);
        while(Hash::needsRehash($pass)){$pass = Hash::make($req->password);}
        $kar->password = $pass;
        $kar->nama = $req->nama;
        $kar->kelamin = (int) filter_var($req->kelamin, FILTER_VALIDATE_BOOLEAN);
        $kar->alamat = $req->alamat;
        $kar->tanggal_lahir = $req->tanggal_lahir;
        $kar->nomor_telepon = $req->nomor_telepon;
        $kar->foto = "/storage/".$filename;
        $kar->save();
        DB::commit();
        return redirect("/admin")->with("berhasil", "Data Karyawan berhasil diinput");
      }catch (\Exception $e) {
        DB::rollback();
        return back()->with("dbError", $e->getMessage());
      }

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
        $kar = Karyawan::find($id);
        $kar->delete();
        DB::commit();
        return redirect("/buat/karyawan");
      } catch (\Exception $e) {
        DB::rollback();
        echo($e);
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
      $kar = Karyawan::find($id);
      $kar->kelamin = $kar->kelamin == 1 ? "Laki-Laki" : "Perempuan";
      return view("admin.editKaryawan", ["data"=>$kar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
      DB::beginTransaction();
      try {
        $kar = Karyawan::find($id);
        $pass = Hash::make($req->password);
        while(Hash::needsRehash($pass)){$pass = Hash::make($req->password);}
        $kar->password = $req->password == "" ? $kar->password : $pass;
        $kar->nama = $req->nama == "" ? $kar->nama : $req->nama;
        $kar->alamat = $req->alamat == "" ? $kar->alamat : $req->alamat;
        $kar->nomor_telepon = $req->nomor_telepon == "" ? $kar->nomor_telepon : $req->nomor_telepon;
        if($req->foto){
          $filename = $req->user.".".$req->foto->getClientOriginalExtension();
          $req->foto->storeAs("\public", $filename);
          $kar->foto = "/storage/".$filename;
        }
        $kar->save();
        DB::commit();
        return redirect("/buat/karyawan");
      } catch (\Exception $e) {
        DB::rollback();
        return back()->with("dbError", "Terjadi kesalahan");
      }
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
    public function logout(){
      // Auth::logout(); // nda guna
      Cookie::queue(Cookie::forget("laravel_session"));
      return redirect('/');
    }
}
