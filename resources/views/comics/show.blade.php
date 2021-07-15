@extends('layout.app')
@section('content')

<div class="comic">
    <div class="container">
        <img src=" {{$comic->path}} " alt="">
        
        <h1> {{$comic->title}} </h1>
        <p> {{$comic->year}} </p>
        <p> {{$comic->description}} </p>
        <p> {{$comic->price}} </p>
        

        
        <form action=" {{route('comics.destroy', $comic->id)}} " method="post">
            @csrf
            @method('DELETE')
            
            <button type="submit">Delete</button>
        </form>

        <a href=" {{route('comics.edit', $comic->id)}} "><button>Edit</button></a>
    </div>
        
</div>


@endsection