@extends('master')

@section('title', 'show')

@section('content')
  <h1>Index page</h1>
  <ul>
    @foreach($cars as $car)
    <li>
      <a href="/cars/{{ $car->id }}">{{ $car->title}}
      </a>
    </li>
    @endforeach
  </ul>
@endsection










