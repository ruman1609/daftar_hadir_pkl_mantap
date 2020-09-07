<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('/own/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/own/css/login.css')}}">
    <link href="{{url('/own/css/material.css')}}" rel="stylesheet">
  </head>
  <body class="loginForm">
    <div class="container">
      <div class="login row">
        <div class="col-md-4 offset-md-4">
          <div class="box b-a-0">
            <div class="p-2">
              <h1>LOGIN</h1>
              <hr>
            </div>
            <form action="{{route('prosesKaryawan')}}" method="post">
              @csrf
              <div class="form-group px-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <i class="material-icons md-dark input-group-text">account_circle</i>
                  </div>
                  <input type="text" class="form-control" name="user" id="user" placeholder="Username" required>
                </div>
              </div>
              <div class="form-group px-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <i class="material-icons md-dark input-group-text">lock</i>
                  </div>
                  <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required>
                </div>
              </div>
              <div class="form-group px-2">
                <button type="submit" id="submit" class="btn btn-primary">LOGIN</button>
              </div>
               <!-- //remember me -->
               <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
              @if(session()->has("err"))
              <div class="form-group px-2">
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <strong>{{session()->get("err")}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              @endif
            </form>
            <br>
          </div>
        </div>
      </div>
    </div>
    <script src="{{url('/own/js/bootstrap.js')}}"></script>
  </body>
</html>
