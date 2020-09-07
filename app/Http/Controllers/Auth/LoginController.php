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
      // $this->validate($req,[
      //   'user' => 'email|exists:users,email',
      //   'password' => 'required',
      // ]);

      // $attempts = [
      //   'user' => $req->user,
      //   'password'=>$req->password,
      // ];

      // if (Auth::attempt($attempts, (bool) $req->remember)) {
      // }
        if(Auth::guard("admin")->attempt(["user"=>$req->user, "password"=>$req->password])){
          return redirect()->intended("/admin");
        }
      
      return back()->with("err","Username / Password salah!");
    }

    public function showKaryawanForm(){
      return view("karyawan.login", ["url"=>"karyawan"]);
    }
    public function karyawanLogin(Request $req){
      $karyawan = Karyawan::find($req->user);
      if(Auth::guard("karyawan")->attempt(["user"=>$req->user, "password"=>$req->password])){
        
        return redirect()->intended("/karyawan");
      }else
        // dd('error');
       return back()->with("err","Username / Password salah!");
    }


}
