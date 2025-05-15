@extends('main')

@section('content')
<h1>Celeiros</h1>
<a href="{{ route('celeiros.create') }}" class="btn btn-primary">Novo Celeiro</a>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($celeiros as $celeiro)
            <tr>
                <td>{{ $celeiro->id }}</td>
                <td>{{ $celeiro->nome }}</td>
                <td>
                    <a href="{{ route('celeiros.edit', $celeiro) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('celeiros.destroy', $celeiro) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
