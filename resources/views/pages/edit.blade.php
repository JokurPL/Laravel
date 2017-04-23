@extends('layout')
@section('content')

    {!! Form::model($page, ['route' => ['pages.update', $page], 'method' => 'PUT']) !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </ul>
    @endif
            
        <div class="form-group">
            {!! Form::label('title', "Tytuł: ") !!}
            {!! Form::text('title', $page->title, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content', "Treść: ") !!}
            {!! Form::textarea('content', $page->content, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit("Edytuj", ['class'=>'btn btn-primary']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}

@endsection