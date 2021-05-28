@extends('layout.default')

@section('main')
    <form action="javascript:register()" method="post" id="fm">
        @csrf
        @include('layout.input', [
            'filed' => 'id'
        ])
        @include('layout.input',[
            'filed' => 'password'
        ])
        @include('layout.input',[
            'filed' => 'c_password'
        ])
        @include('layout.email',[
            'filed' => 'email'
        ])
        <input type="submit" value="@lang('button.submit')">
    </form>
@endsection