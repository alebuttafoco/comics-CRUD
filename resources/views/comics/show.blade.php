@extends('layout.app')
@section('title', 'COMIC | ' . $comic->title)
@section('content')

<div class="comic container-sm">
    {{-- path --}}
    <div class="path">
        <img src=" {{$comic->path}} " alt="">
    </div>
        
    {{-- details --}}
    <div class="details">
        <h2 class="comic_title"> {{$comic->title}} </h2>
        <p class="description"> {{$comic->description}} </p>
        <span class="price"> {{$comic->price}} € </span>
    </div>
        
    <div class="buttons">

        <form action=" {{route('comics.destroy', $comic->id)}} " method="post">
            @csrf
            @method('DELETE')
            
            <button id="app" class="delete" type="submit" @click='alert' >Delete</button>
        </form>

        <a href=" {{route('comics.edit', $comic->id)}} "><button class="m-t">Edit</button></a>

    </div>
    
</div>


@endsection