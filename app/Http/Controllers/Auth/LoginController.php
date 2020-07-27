<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\AdminModel as Admin;
use App\KaryawanModel as Karyawan;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:karyawan')->except('logout');
    }

    // -----------------------LOGINNYA DIMULAI DARI SINI------------------------
    public function showAdminForm(){
      return view("admin.login", ["url"=>"admin"]);
    }
    public function adminLogin(Request $req){
      $admin = Admin::find($req->user);
      // if(Hash::check($req->password, $admin->password)){
      //   $req->password = $admin->password;
      //   dd($req->password);
      // }
      if(Auth::guard("admin")->attempt(["user"=>$req->user, "password"=>$req->password])){
        return redirect()->intended("/admin");
      }
      return back()->with("err","asw salah!");
    }

    public function showKaryawanForm(){
      return view("karyawan.login", ["url"=>"karyawan"]);
    }
    public function karyawanLogin(Request $req){
      $pass = Hash::make($req->pass);
      while(Hash::needsRehash($pass)){$pass = Hash::make($req->pass);}
      if(Auth::guard("karyawan")->attempt(["id"=>$req->user, "pass"=>$pass], $req->get("remember"))){
        return redirect()->intended("/karyawan");
      }
      return back()->withInput($req->only("id", "remember"));
    }
}
