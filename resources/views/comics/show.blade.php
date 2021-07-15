@extends('layout.app')
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
        
        {{-- <form action=" {{route('comics.destroy', $comic->id)}} " method="post">
            @csrf
            @method('DELETE')
            
            <button type="submit">Delete</button>
        </form>

        <a href=" {{route('comics.edit', $comic->id)}} "><button>Edit</button></a> --}}
    
</div>


@endsection