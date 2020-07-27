<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <form action="{{route("regisAdmin")}}" method="post">
      @csrf
      <input type="text" name="user" value="admin@admin.com"> <br>
      <input type="password" name="password" value="admin"> <br>
      <input type="submit" value="SUBMIT!">
    </form>
  </body>
</html>
