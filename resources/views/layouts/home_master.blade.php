<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="">
</head>
<body>
    
    @include('layouts.home_header')
    @yield('content')

</body>
</html>