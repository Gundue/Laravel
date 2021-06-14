@extends('layout.default')

@section('main')
    <form action="/Challenge/upload" method="post" enctype="multipart/form-data">
        @csrf
        @include('layout.input', [
            'field' => 'p_name',
            'focus' => 'autofocus'
        ])
        <select name="track">
            <option value="">트랙선택</option>
            <option value="rev">rev</option>
            <option value="misc">misc</option>
            <option value="pwn">pwn</option>
            <option value="web">web</option>
        </select>
        @include('layout.input', [
            'field' => 'file',
            'type' => 'file'
        ])
        @include('layout.input', [
            'field' => 'p_url',
        ])
        @include('layout.input', [
            'field' => 'point',
            'type' => 'number'
        ])
        @include('layout.input', [
            'field' => 'flag',
        ])
        <input type="submit" value="@lang('button.submit')">
    </form>
@endsection