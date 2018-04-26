<!DOCTYPE html>
<html>
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
<p>This is landing page </p>

        <div class="panel panel-primary">
          <div class="panel-heading">For user</div>
          <li><a href="{{ route('login') }}">User Login</a></li>
          <li><a href="{{ route('register') }}">User Register</a></li>
        </div>

        <div class="panel panel-primary">
          <div class="panel-heading">For user</div>
          <li><a href="{{ route('admin.login') }}">Admin Login</a></li>
          <li><a href="{{ route('admin.register') }}">Admin Register</a></li>
        </div>

        <div class="panel panel-primary">
          <div class="panel-heading">For user</div>
          <li><a href="{{ route('sp.login') }}">Sp Login</a></li>
          <li><a href="{{ route('sp.register') }}">Sp Register</a></li>
        </div



</div>
</body>
</html>
