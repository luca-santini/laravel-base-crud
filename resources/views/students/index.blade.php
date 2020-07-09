@extends('layout.app');

@section('page-title', 'lista studenti');

@section('content');
    @foreach ($studenti as $studente)
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Email</th>
                          </tr>
                    </thead>
                    <tbody>
                          <tr>
                            <td> {{ $studente->name}} </td>
                            <td> {{ $studente->surname}} </td>
                            <td> {{ $studente->email}} </td>
                          </tr>
                    </tbody>
                </div>
            </div>
        </div>
    @endforeach
@endsection
