@extends('layout.default')

@section('main')
<h1>misc</h1>
@foreach($problem as $row)
<div id="ex1" class="modal">
  <h1>{{ $row->p_name }}</h1>
  <p>분야 : {{ $row->track }}</p>
  <p>포인트 : {{ $row->point }}</p>
  <p>문제 파일 : {{ $row->file ?? ''}}</p>
  {{ asset('storage/file.jpg') }}
  <a href="#" rel="modal:close">닫기</a>
</div> 
<p><a href="#ex1" rel="modal:open">{{ $row->p_name }}</a></p>
@endforeach
@endsection