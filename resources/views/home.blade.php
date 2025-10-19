<html lang="en">

<link rel="stylesheet" type="text/css" href="{{ asset('css/skylog-general.css') }}" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SkyLog</title>
</head>

<body>
  <img src="{{ asset('images/skylog-logo-small.png') }}" alt="skylog logo">

  <div class="nav-bar">
  <a href="{{ url('/account.login') }}" class="upper-right-button">Login</a>
   <a href="{{ url('/account.register') }}" class="upper-right-button" >Register</a>
  </div>

  <div>
   <img src="{{ asset('images/drone.jpg') }}" alt="skylog logo" width="2000" hieght="600">
  </div>

  <div class="center-div">
    <h4>[Addition information and links placeholder]</h4>
  </div>
</body>

</html>
