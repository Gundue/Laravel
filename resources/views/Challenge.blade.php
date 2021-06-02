@extends('layout.default')

@section('main')
    <table>
        <tr>
            <th>idx</th>
            <td>{{ $users['0']->idx }}</td>
        </tr>
        <tr>
            <th>id</th>
            <td>{{ $users['0']->user_id }}</td>
        </tr>
        <tr>
            <th>pw</th>
            <td>{{ $users['0']->user_pw }}</td>
        </tr>
    </table>
@endsection