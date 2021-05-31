@extends('layout.default')

@section('main')
    <form action="javascript:login()" method="post">
        @include('layout.input', [
        'filed' => 'id'
        ])
        @include('layout.input', [
            'filed' => 'password',
            'type' => 'password'
        ])
        <input type="submit" value="@lang('button.submit')">
        <a href="/register">회원가입</a>
    </form>
@endsection