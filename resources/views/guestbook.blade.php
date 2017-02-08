@extends('template')

@section('contenu')
    {!! Form::open(['url' => 'monControllerEnvoi']) !!}

        {!! Form::label('name', 'Entrez votre nom : ') !!}

        {!! Form::text('name') !!}

        {!! Form::label('content', 'Entrez votre texte : ') !!}

        {!! Form::textarea('content') !!}

        {!! Form::submit('Envoyer !') !!}

    {!! Form::close() !!}
@stop
