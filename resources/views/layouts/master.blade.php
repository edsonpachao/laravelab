<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>lista de personas</title>
.<!--forma de referencia un stylo con blade*/-->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container">
    <div class="page-header">
        @yield('header')
    </div>
        @yield('content')
       </div>
</body>
</html>