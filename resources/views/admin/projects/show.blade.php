@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>

        <img src="{{ $project->preview }}" alt="">

        <p>Data di pubblicazione: {{ $project->date }}</p>

        <p>{{ $project->description }}</p>

        <a class="d-block mb-3" href="{{ $project->url }}" target="_blank">Vai al progetto Github</a>

        <div class="action d-flex gap-3 mb-3">
            <a class="btn btn-primary" href="{{ route('admin.projects.edit', $project) }}">Modifica progetto</a>

            <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger" type="submit">Elimina progetto</button>
            </form>
        </div>

        <a href="{{ route('admin.projects.index') }}">Torna alla lista completa</a>
    </div>
@endsection
