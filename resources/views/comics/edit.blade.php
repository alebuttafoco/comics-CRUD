@extends('layout.app')
@section('title', 'EDIT | ' . $comic->title)
@section('content')

<div class="comics_edit">
     {{-- title --}}
     <div class="section_title">
        <h1 class="container">EDIT COMIC</h1>
    </div>

    <div class="container-sm">
 
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
                <input type="text" name="title" id="title" class="form-control" value=" {{$comic->title}}" required min="3" max="100">
            </div>
            {{-- ----------------------------------------------------------------------------------------------------------------
            MOSTRA ERRORE 
            ----------------------------------------------------------------------------------------------------------------------}}
            @error('title')
            <div class="alert alert-danger"><i class="fas fa-arrow-alt-circle-up alert-danger"></i> {{ $message }}</div>
            @enderror
            {{-- ----------------------------------------------------------------------------------------------------------------
            / MOSTRA ERRORE 
            ----------------------------------------------------------------------------------------------------------------------}}

            {{-- description --}}
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" >{{$comic->description}}</textarea>
            </div>

            {{-- price --}}
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" name="price" step="0.01" id="price" class="form-control" value="{{$comic->price}}">
            </div>
        

            <button class="btn" type="submit">Submit</button>
        
        </form>
        

    </div>
</div>


@endsection