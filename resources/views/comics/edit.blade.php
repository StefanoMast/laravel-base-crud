@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Modifica Fumetto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update' , ['comics' => $comics_to_update->id]) }}" method= "POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="title">Immagine</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') ? old('title') : $comics_to_update->title}}">
              </div>
            <div class="form-group mb-3">
              <label for="thumb">Immagine</label>
              <input type="text" class="form-control" name="thumb" id="thumb" value="{{ old('thumb') ? old('thumb') : $comics_to_update->thumb}}" >
            </div>
              <div class="form-group mb-3">
                <label for="description">Immagine</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ old('description') ? old('description') : $comics_to_update->description}}">
              </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
    </div>
    
    
@endsection