@extends('layout.app');

@section('page-title', 'lista studenti');

@section('content')
    @foreach ($studenti as $studente)
        <p> {{ $studente->name}} </p>
        <p> {{ $studente->surname}} </p>
        <p> {{ $studente->email}} </p>
    @endforeach
@endsection
