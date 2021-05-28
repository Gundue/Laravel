<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <style>
        ul,li{
            list-style: none;
        }
        .container {
            display: flex
        }
    </style>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        function register() {
            let id = document.getElementById('id').value;
            let pw = document.getElementById('password').value;

            let email = document.getElementById('email').value;
            let domain = document.getElementById('domain').value;
        
            let mail = email+'@'+domain

            console.log(mail)

            var re = /^[a-zA-Z0-9]{8,12}$/;

            if(!re.exec(id)) {
                return false
            } 
            
            $.ajax({
                headers: {
                     'X-Requested-With': 'XMLHttpRequest', 'X-CSRF-TOKEN': $('meta[name=X-CSRF-TOKEN]')
                },
                url: "/register/validate",
                type: "post",
                datatype: "json",
                success: (response) => {
                    alert("성공")
                },
                error:function(request, status, error){
                alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                }
            }) 
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="menu">
            <div class="logo"><img src="" alt=""></div>
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