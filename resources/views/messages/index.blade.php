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
                    <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>
                    <td>{{ $message->title }}</td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {!! link_to_route('messages.create', 'Create Message', [], ['class' => 'btn btn-primary']) !!}

@endsection