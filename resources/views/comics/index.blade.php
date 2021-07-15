@extends('layout.app')
@section('content')

<div class="comics">
    <div class="container">
        {{-- title --}}
        <h1>COMICS</h1>
    
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

</div>


@endsection