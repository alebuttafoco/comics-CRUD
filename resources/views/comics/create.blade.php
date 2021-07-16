@extends('layout.app')
@section('title', 'CREATE')
@section('content')

<div class="comics_create">
    {{-- title --}}
    <div class="section_title">
        <h1 class="container">CREATE NEW COMIC</h1>
    </div>


     <div class="container-sm">
        {{-- MOSTRA ERRORE --}}
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif  --}}
 
        {{-- FORM --}}
        <form action=" {{route('comics.store')}} " method="POST">
            @csrf

            {{-- path --}}
            <div class="form-group">
                <label for="path">Immagine</label>
                <input type="url" name="path" id="path" class="form-control" placeholder="inserisci l'URL dell'immagine">
            </div>
            {{-- title --}}
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="inserisci il titolo">
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
                <textarea name="description" id="description" cols="30" rows="10" placeholder="inserisci la descrizione"></textarea>
            </div>

            {{-- price --}}
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" name="price" step="0.01" id="price" class="form-control" placeholder="inserisci il prezzo">
            </div>
        

            <button type="submit">Submit</button>
        
        </form>
        

    </div>
</div>


@endsection