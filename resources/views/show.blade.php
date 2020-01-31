@extends('master')

@section('title', 'index')

@section('content')
<h1>This is the show page</h1>
<h2>{{ $car->title }}</h2>
<p>Manufacturer: {{ $car->producer }}</p>
<p>Number of doors: {{ $car->number_of_doors }} </p>
    
@endsection

