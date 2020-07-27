<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
  </head>
  <body>
    <form class="" action="{{route("prosesAdmin")}}" method="post">
      @csrf
      <input type="email" name="user" id="user" placeholder="username@username.com" required> <br>
      <input type="password" name="password" id="password" placeholder="Password" required> <br>
      <input type="submit" id="submit" value="LOGIN">
      @if(session()->has("err"))
        <h5>{{session()->get("err")}}</h5>
      @endif
    </form>
  </body>
</html>
