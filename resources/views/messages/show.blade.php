@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>title</th>
            <td>{{ $message->title }}</td>
        </tr>
        <tr>
            <th>message</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    <a class="btn btn-light" href="{{ route('messages.edit', ['id' => $message->id]) }}">Edit</a>

    <form action="{{ route('messages.destroy', ['id' => $message->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
    
@endsection