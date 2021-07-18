@extends('layout.app')
@section('title', 'COMICS')
@section('content')

    
<div class="comics">
    
        {{-- title --}}
    <div class="section_title">
        <h1 class="container">COMICS</h1>
    </div>
        
    {{-- cards --}}
    <div class="cards">
            
        {{-- card --}}
        @foreach ($comics as $comic)
        <div class="card">
            <a href=" {{route('comics.show', $comic->id)}} "><img src=" {{$comic->path}} " alt=""></a>
        </div>
        @endforeach
    </div>   
    
</div>


@endsection