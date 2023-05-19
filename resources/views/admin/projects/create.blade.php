@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>Aggiungi progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="title">Titolo</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="preview">Anteprima</label>
                <input type="text" class="form-control" name="preview">
            </div>

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="description">Descrizione</label>
                <textarea class="form-control" name="description"></textarea>
            </div>

            <div class="input-group flex-nowrap mb-3">
                <label class="input-group-text" for="url">Url Github</label>
                <input type="text" class="form-control" name="url">
            </div>

            <div class="input-group flex-nowrap mb-3">
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </div>
        </form>
    </div>
@endsection
