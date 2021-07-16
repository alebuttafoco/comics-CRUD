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
        <span class="btn btn-price"> {{$comic->price}} € </span>
    </div>
    
</div>


@endsection