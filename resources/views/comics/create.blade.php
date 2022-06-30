@extends('layouts.app')

@section('main_content')
<div class="container">
    <h1>crea nuovo fumetto</h1>
        <form action="{{ route('comics.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="series">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Type</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="type">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
