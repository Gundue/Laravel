@extends('layout.default')

@section('main')
    <table>
        <tr>
            <td>Rank</td>
        </tr>
        <tr>
            <td>{{ $users['0']->idx ?? '' }}</td>
        </tr>
    </table>
@endsection