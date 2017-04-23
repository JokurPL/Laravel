@extends('layout')
@section('content')

    {!! Form::open(['route' => 'pages.store']) !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </ul>
    @endif
            
        <div class="form-group">
            {!! Form::label('title', "Tytuł: ") !!}
            {!! Form::text('title', NULL, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content', "Treść: ") !!}
            {!! Form::textarea('content', NULL, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit("Zapisz", ['class'=>'btn btn-primary']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}

@endsection