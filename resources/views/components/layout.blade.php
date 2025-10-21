<html lang="en">

<link rel="stylesheet" type="text/css" href="{{ asset('css/skylog-general.css') }}" >

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>SkyLog</title>
</head>

<body>
<a href="{{ url('/') }}"><img src="{{ asset('images/skylog-logo-small.png') }}" alt="skylog logo"></img></a>

{{ $slot}}

</body>

</html>
