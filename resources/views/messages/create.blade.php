@extends('layouts.app')

@section('content')

    <h1>New Post</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Message: ') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Post', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection