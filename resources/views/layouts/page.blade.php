<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body style="background: yellow">
    <h1><center>Myproject.test</center></h1>
    @include('partials.navlink')

    @yield('content')



    <!-- {{Request::route()->getName()}}  แสดงสถานะเพจ-->  

</body>
</html>