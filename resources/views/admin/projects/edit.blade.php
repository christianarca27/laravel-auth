@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>Modifica progetto</h1>

        <form action="{{ route('admin.projects.update', $project) }}" method="post">
            @csrf
            @method('PUT')

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="title">Titolo</label>
                <input type="text" class="form-control" name="title" value="{{ $project->title }}">
            </div>

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="date">Data</label>
                <input type="date" class="form-control" name="date" value="{{ $project->date }}">
            </div>

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="preview">Anteprima</label>
                <input type="text" class="form-control" name="preview" value="{{ $project->preview }}">
            </div>

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="description">Descrizione</label>
                <textarea class="form-control" name="description">{{ $project->description }}</textarea>
            </div>

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="url">Url Github</label>
                <input type="text" class="form-control" name="url" value="{{ $project->url }}">
            </div>

            <div class="input-group flex-nowrap mb-3">
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </div>
        </form>
    </div>
@endsection
