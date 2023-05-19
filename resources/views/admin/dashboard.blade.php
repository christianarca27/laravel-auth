@extends('layouts/admin')

@section('content')
    <h1>Pagina di amministrazione</h1>

    <a href="{{ route('admin.projects.index') }}">Vedi tutti i progetti</a>
@endsection
