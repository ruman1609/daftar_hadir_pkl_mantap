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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("login/admin", "Auth\LoginController@showAdminForm")->name("loginAdmin");
Route::get("login/karyawan", "Auth\LoginController@showKaryawanForm")->name("loginKaryawan");
Route::get("register/admin", "Auth\RegisterController@showAdminForm")->name("regisAdmin");

Route::post("login/admin", "Auth\LoginController@adminLogin")->name("prosesAdmin");
Route::post("login/karyawan", "Auth\LoginController@karyawanLogin");
Route::post("register/admin", "Auth\RegisterController@createAdmin")->name("prosesKaryawan");


Route::middleware("auth:admin")->group(function(){
  Auth::routes();
  Route::get("/admin", "DashboardAdminController@first");
  Route::resource("rekap", "RekapController");
  Route::get("/rekap/{id}/{month}", "RekapController@liatBulan");
  Route::get("/pengumuman", "PengumumanController@show");
  Route::post("/pengumuman", "PengumumanController@post");
  Route::resource("buat/karyawan", "AdministratorController");
});
Route::middleware("auth:karyawan")->group(function(){
  Auth::routes();
  Route::view("/karyawan", "karyawan.dashboardKaryawan");
});

Route::get("/logout", "AdministratorController@logout");
