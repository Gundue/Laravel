<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <div class="container">
        <div class="menu">
            {{-- <div class="logo"><img src="images/logo.png" alt=""></div> --}}
            <ul>
                <li><a href="/">Index</a></li>
                <li><a href="/Challenge">Challenge</a><ul>
                    <li><a href="/Challenge/rev">reversing</a></li>
                    <li><a href="/Challenge/misc">misc</a></li>
                    <li><a href="/Challenge/pwn">pwnable</a></li>
                    <li><a href="/Challenge/web">web</a></li>
                </ul></li>
                <li><a href="/Auth">Auth</a></li>
                <li><a href="/Ranking">Ranking</a></li>
                <li><a href="/login">login</a></li>
            </ul>
        </div>
        <div class="main">
            @yield('main')
        </div>
    </div>
</body>
</html>