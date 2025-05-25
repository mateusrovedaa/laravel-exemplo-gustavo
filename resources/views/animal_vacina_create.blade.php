@extends('main')

@section('content')
    <form method="POST" action="{{ route('animal.vacina.store') }}">
        @csrf

        <label>Animal:</label>
        <select name="animal_id">
            @foreach ($animais as $animal)
                <option value="{{ $animal->id }}">{{ $animal->nome }}</option>
            @endforeach
        </select>

        <label>Vacinas:</label><br>
        @foreach ($vacinas as $vacina)
            <label>
                <input type="checkbox" name="vacinas[]" value="{{ $vacina->id }}">
                {{ $vacina->nome }}
            </label><br>
        @endforeach

        <button type="submit">Salvar Vacinas</button>
    </form>
@endsection
