@extends('layout.default')

@section('main')
    <form action="/login/validate" method="post" id="lform">
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
        <a href="/register">회원가입</a>
    </form>
@endsection