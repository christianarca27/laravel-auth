@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>

        <img src="{{ $project->preview }}" alt="">

        <p>Data di pubblicazione: {{ $project->date }}</p>

        <p>{{ $project->description }}</p>

        <a href="{{ $project->url }}" target="_blank">Vai al progetto Github</a>

        <a href="{{ route('admin.projects.index') }}">Torna alla lista completa</a>
    </div>
@endsection
