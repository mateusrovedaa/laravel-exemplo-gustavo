@extends('main')

@section('content')
    <h2>Vacina Create</h2>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form method="POST" action="{{ route('vacinas.store') }}">
        @csrf

        <label for="nome">Nome da vacina:</label><br>
        <input type="text" name="nome" id="nome" required>

        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao" rows="4" cols="40"></textarea>

        <button type="submit">Create</button>
    </form>
@endsection
