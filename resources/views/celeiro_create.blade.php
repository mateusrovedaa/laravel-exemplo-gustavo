@extends('main')

@section('content')
<h1>Criar Celeiro</h1>

<form action="{{ route('celeiros.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success mt-2">Salvar</button>
</form>
@endsection
