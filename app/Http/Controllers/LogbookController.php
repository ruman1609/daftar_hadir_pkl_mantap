<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LogbookModel as Logbook;
use App\KaryawanModel as Karyawan;


class LogbookController extends Controller
{
    public function tambah(){
        return view('karyawan.logbook');
    }

    public function add(Request $request){
        // $id = Auth::user()->user;
        // dd($id);

        DB::beginTransaction();
        try{
            $logbook = Logbook::insert([
                'tanggal_absen' => $request->tanggal,
                'id_karyawan' => $request->id_karyawan,
                'logbook' => $request->logbook
            ]);

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
