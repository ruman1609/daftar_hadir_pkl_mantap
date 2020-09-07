@extends('layouts.auth')

@section('title')
  <title>Login </title>
@endsection
@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <h1>Login</h1>
              <!-- <div>
              <img src="logo.jpg">
              </div> -->
              <form class="" action="{{route('prosesAdmin')}}" method="post">
              @csrf
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                </div>
                <input class="form-control" type="email" name="user" id="user" placeholder="username@username.com" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                </div>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required> <br>
              </div>
              <div class="col-6">
                <button class="btn btn-primary active px-4 btn-block">Login</button>
              </div>
              <!-- //remember me -->
              <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
              @if(session()->has("err"))
                <h5>{{session()->get("err")}}</h5>
              @endif
            </form>
            </div>
          </div>        
        </div>
      </div>
    </div>


@endsection