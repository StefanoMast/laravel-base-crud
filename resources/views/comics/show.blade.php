@extends('layouts.app')

@section('main_content')
    <h1>{{ $comics->title}}</h1>
    <img src="{{ $comics->image_thumb}}" alt="">
    <h3>{{ $comics->series}}</h3>
    <h3>{{ $comics->type}}</h3>
    <h3>{{ $comics->sale_date}}</h3>
    <h3>{{ $comics->price}}</h3>
    <p class="mb-4">{{ $comics->description}}</p>
    <div>
    <a class="btn btn-primary" href="{{route('comics.edit', ['comic'=> $comics->id])}}">Modifica</a>
        <form action="{{ route('comics.destroy', ['comics' => $comics->id])}}" method="POST">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-danger" >Cancella</button>
        </form>
    
    </div>
@endsection