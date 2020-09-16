<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LogbookModel as Logbook;
use App\KaryawanModel as Karyawan;
use Auth;

class LogbookController extends Controller
{
    public function tambah(){
        return view('karyawan.logbook');
    }

    public function add(Request $request){
        DB::beginTransaction();
        $id = Auth::user()->user;
        try{
            $logbook = new Logbook();
            $logbook->tanggal_absen = $request->tanggal;
            $logbook->id_karyawan = $id;
            $logbook->logbook = $request->logbook;
            $logbook->save();
            DB::commit();
            $request->session()->flash('messages','Berhasil Dibuat');
            $request->session()->flash('type','success');

            return redirect()->route('karyawan.logbook');
        }catch(Exception $e){
            DB::rollback();

            return $e->getMessage();
        }
    }
}
