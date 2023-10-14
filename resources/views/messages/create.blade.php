@extends('layouts.app')

@section('content')

    <h1>New Post</h1>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('messages.store') }}", method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">title:</label>
                    <input class="form-control" name="title" type="text" id="title">
                </div>
                <div class="form-group">
                    <label for="content">message:</label>
                    <input class="form-control" name="content" type="text" id="content">
                </div>

                <input class="btn btn-primary" type="submit" value="Post">
            </form>
        </div>
    </div>

@endsection