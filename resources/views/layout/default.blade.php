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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        function register() {
            let form = $('#fm')
            let request = new FormData(form[0])
            let id = $('#id').val()
            let email = $('#email').val()
            let domain = $('#domain').val()
            let pw = $('#password').val()
            let c_pw = $('#c_password').val()
        
            let mail = email+'@'+domain
            request.append('id', id)
            request.append('email', mail)

            var re = /^[a-zA-Z0-9]{8,12}$/;

            if(!re.exec(id)) {
                alert('다시 입력해주세요');
                $('#id').focus()
                return false;
            } 
            if(pw != c_pw) {
                alert('비밀번호 불일치');
                $('#password').focus()
                return false
            }

            $.ajax({
                url: "/register/validate",
                type: "post",
                data: request,
                contentType: false,
                processData: false,
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