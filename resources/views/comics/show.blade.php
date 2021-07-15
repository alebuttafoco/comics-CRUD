@extends('layout.app')
@section('content')

<div class="comic">
    <div class="container">
        {{-- title --}}
        <h1> {{$comic->title}} </h1>

        <img src=" {{$comic->path}} " alt="">
        <p> {{$comic->description}} </p>
        

    </div>

</div>


@endsection