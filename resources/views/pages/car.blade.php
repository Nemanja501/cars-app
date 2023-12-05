@extends('pages.layout.default')
@section('content')

<h1> Title: {{ $car->title }} </h1>
<h1> Producer: {{ $car->producer }} </h1>
<h1> Number of doors: {{ $car->number_of_doors }} </h1>

@endsection