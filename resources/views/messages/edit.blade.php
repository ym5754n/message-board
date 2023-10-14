@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }} edit</h1>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('messages.update', ['id' => $message->id]) }}", method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">title:</label>
                    <input class="form-control" name="title" type="text" id="title" value="{{ $message->title }}">
                </div>
                <div class="form-group">
                    <label for="content">message:</label>
                    <input class="form-control" name="content" type="text" id="content" value="{{ $message->content }}">
                </div>

                <input class="btn btn-primary" type="submit" value="Save">
            </form>
        </div>
    </div>

@endsection