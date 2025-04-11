@extends('main')

@section('content')

<h2>Animal Create</h2>

<form action="{{ route('animals.store') }}" method="post">
    @csrf
    <label for="name">Nome</label>
    <input type="text" name="nome" value="">
    <label for="especie">Espécie</label>
    <input type="text" name="especie" value="">
    <label for="idade">Idade</label>
    <input type="text" name="idade" value="">
    <button type="submit">Create</button>
</form>

@endsection