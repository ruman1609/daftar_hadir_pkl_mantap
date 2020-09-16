<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//login
Route::get("login/admin", "Auth\LoginController@showAdminForm")->name("loginAdmin");
Route::get("login/karyawan", "Auth\LoginController@showKaryawanForm")->name("loginKaryawan");
Route::get("register/admin", "Auth\RegisterController@showAdminForm")->name("regisAdmin");

Route::post("login/admin", "Auth\LoginController@adminLogin")->name("prosesAdmin");
Route::post("login/karyawan", "Auth\LoginController@karyawanLogin")->name("prosesKaryawan");
Route::post("register/admin", "Auth\RegisterController@createAdmin");

//admin
Route::middleware("auth:admin")->group(function(){
  Auth::routes();
  Route::get("/admin", "DashboardAdminController@first")->name('admin.dashboard');
  Route::resource("rekap", "RekapController");
  Route::get("/rekap/hasil","RekapController@show");
  Route::get("/rekap/{id}/{month}", "RekapController@liatBulan");
  Route::get("/pengumuman", "PengumumanController@show")->name('pengumuman.show');
  Route::get("/admin/logout", "AdministratorController@logout")->name("admin.logout");
  Route::post("/pengumuman", "PengumumanController@post");
  Route::resource("karya", "AdministratorController");
});

Route::middleware("auth:karyawan")->group(function(){
  Auth::routes();
  Route::view("/karyawan", "karyawan.dashboardKaryawan");
  Route::get("/karyawan","KaryawanController@index")->name('karyawan.dashboard');
  // absen
  Route::get('absen','KaryawanController@absen')->name('karyawan.absen');
  Route::post('absen','KaryawanController@prosesAbsen')->name('karyawan.prosesAbsen');
  // logbook
  Route::get('/logbook','LogbookController@tambah')->name('karyawan.logbook');
  Route::post('/logbook/add','LogbookController@add')->name('logbook.add');
  Route::get("/logout", "AdministratorController@logout");
  //rekap
  Route::get('/rekapKaryawan','RekapController@rekapKaryawan')->name('karyawan.s');
});
