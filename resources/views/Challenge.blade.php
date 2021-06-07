@extends('layout.default')

@section('main')
    <form action="/Challenge/upload" id="" method="post" enctype="multipart/form-data">
        @csrf
        @include('layout.input', [
            'filed' => 'p_name',
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
            'filed' => 'file',
            'type' => 'file'
        ])
        @include('layout.input', [
            'filed' => 'p_url',
        ])
        @include('layout.input', [
            'filed' => 'point',
            'type' => 'number'
        ])
        @include('layout.input', [
            'filed' => 'flag',
        ])
        <input type="submit" value="@lang('button.submit')">
    </form>
@endsection