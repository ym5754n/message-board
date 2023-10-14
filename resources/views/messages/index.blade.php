@extends('layouts.app')

@section('content')

    <h1>messages</h1>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td><a href="{{ route('messages.show', ['id' => $message->id]) }}">{{ $message->id }}</a></td>
                    <td>{{ $message->title }}</td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{ $messages->links('pagination::bootstrap-4') }}

    <a class="btn btn-primary" href="{{ route('messages.create') }}">Create Message</a>


@endsection