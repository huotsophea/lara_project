<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navbar</title>
    <link rel="stylesheet" href="{{asset('bootstrap/stylenavbar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamberger-links">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#" class="">Home</a></li>
                <li><a href="#" class="">Sign in</a></li>
                <li><a href="#" class="">Sing up</a></li>
                <li><a href="#" class="">menu</a></li>
                <li><a href="#" class="">Our service</a></li>
                <li><a href="#" class="">Contact us</a></li>
            </ul>
            <h1 class="logo">DWRAM.OMC</h1>
        </div>
    </nav>
    @include('sidebar')
    
</body>
</html>
