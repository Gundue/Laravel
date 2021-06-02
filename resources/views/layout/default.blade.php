<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <div class="container">
        <div class="menu">
            <div class="logo"><img src="images/logo.png" alt=""></div>
            <div class="ul">
                <li><a href="/">Index</a></li>
                <li><a href="/Challenge">Challenge</a></li>
                <li><a href="/Auth">Auth</a></li>
                <li><a href="/Ranking">Ranking</a></li>
                <li><a href="/login">login</a></li>
            </div>
        </div>
        <div class="main">
            @yield('main')
        </div>
    </div>
</body>
</html>