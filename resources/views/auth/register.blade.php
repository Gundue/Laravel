@extends('layout.default')

@section('main')
    <form action="javascript:register()" id="fm" method="post">
        @csrf
        @include('layout.input', [
            'filed' => 'id',
            'focus' => 'autofocus'
        ])
        @include('layout.input',[
            'filed' => 'password',
            'type' => 'password'
        ])
        @include('layout.input',[
            'filed' => 'c_password',
            'type' => 'password'
        ])
        @include('layout.email',[
            'filed' => 'email'
        ])
        <input type="submit" value="@lang('button.submit')">
    </form>
@endsection