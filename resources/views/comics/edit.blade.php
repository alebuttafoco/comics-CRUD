@extends('layout.app')
@section('content')

<div class="comics_edit">
    <h1>EDIT COMIC</h1>
     <div class="container">
 
        {{-- FORM --}}
        <form action=" {{route('comics.update', $comic->id)}} " method="POST">
            @csrf
            {{-- IMPORTANTE --}}
            @method('PUT') 

            {{-- path --}}
            <div class="form-group">
                <label for="path">Immagine</label>
                <img width="150" src=" {{$comic->path}} " alt="">
                <input type="url" name="path" id="path" class="form-control" value=" {{$comic->path}} ">
            </div>
            {{-- title --}}
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value=" {{$comic->title}}">
            </div>

            {{-- description --}}
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" >{{$comic->description}}</textarea>
            </div>

            {{-- year --}}
            <div class="form-group">
                <label for="year">Anno</label>
                <input type="number" name="year" id="year" class="form-control" value="{{$comic->year}}">
            </div>

            {{-- price --}}
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" name="price" step="0.01" id="price" class="form-control" value="{{$comic->price}}">
            </div>
        

            <button type="submit">Submit</button>
        
        </form>
        

    </div>
</div>


@endsection