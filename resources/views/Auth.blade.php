@extends('layout.default')

@section('main')
<h1>Auth</h1>
<form action="/Auth" method="post" style="display: flex">
    @csrf
    @include('layout.input', [
            'field' => 'flag'
        ])
    <input type="submit" value="@lang('button.submit')">
</form>
@endsection

