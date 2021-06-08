@extends('layout.default')

@section('main')
    <table border="1">
        <h1>Rank</h1>
        @foreach ($orderBy as $row)
        <tr>
            <td>{{ $row->user_id }}</td>
            <td>{{ $row->point }}</td>
        </tr>
        @endforeach
    </table>
@endsection