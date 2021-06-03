@extends('layout.default')

@section('main')
    <form action="javascript:login()" id="lform">
        @csrf
        @include('layout.input', [
        'filed' => 'id',
        'focus' => 'autofocus'
        ])
        @include('layout.input', [
            'filed' => 'password',
            'type' => 'password'
        ])
        <input type="submit" value="@lang('button.submit')">
        {{  $users['0']->user_id ?? ''  }}
        <a href="/register">회원가입</a>
    </form>
    <div class="w-1/3 mx-auto mt-32 border">
        <a href="http://127.0.0.1:80/auth/login/google"><img src="{{ URL::asset('/image/googlebtn.png') }}" alt=""></a>
    </div>
@endsection