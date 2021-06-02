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

function login() {

    let form = $('#lform')
    let request = new FormData(form[0])
    
    $.ajax({
        url: "/login/validate",
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