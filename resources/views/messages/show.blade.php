@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>message</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>
    
@endsection