@extends('layouts.app')

@section('main_content')
    <h1>Lista dei Fumetti</h1>
    <ul>
        @foreach ($comics_list as $comics)
            <li>
                <a href="{{route('comics.show', ['comic'=> $comics->id])}}"><h3>{{ $comics->title}}</h3></a>
                <p>{{ $comics->type}}</p>
            </li>
        @endforeach
    </ul>
@endsection
    
