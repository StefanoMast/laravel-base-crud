@extends('layouts.app')

@section('main_content')
    <h1>{{ $comics->title}}</h1>
    <img src="{{ $comics->image_thumb}}" alt="">
    <h3>{{ $comics->series}}</h3>
    <h3>{{ $comics->type}}</h3>
    <h3>{{ $comics->sale_date}}</h3>
    <h3>{{ $comics->price}}</h3>
    <p>{{ $comics->description}}</p>
@endsection