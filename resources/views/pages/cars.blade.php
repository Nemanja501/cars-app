@extends('pages.layout.default')

@section('content')
@foreach ($cars as $car)
    <a href="/cars/{{ $car->id }}">{{ $car->producer }}</a>
@endforeach
@endsection