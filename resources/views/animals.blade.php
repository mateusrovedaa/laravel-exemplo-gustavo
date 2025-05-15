@extends('main')

@section('content')

<a href="{{ route('animals.create') }}">Create</a>

<hr>

<h2>Animals</h2>

<ul>
    @foreach ($animals as $animal)
      <li>{{ $animal->nome }} | {{ $animal->especie }} | {{ $animal->idade }} | {{ $animal->celeiro->nome ?? 'Sem celeiro' }} </li>  
    @endforeach
</ul>

@endsection