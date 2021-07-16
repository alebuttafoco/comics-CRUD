@extends('layout.app')
@section('title', 'HOME | ADMIN')
@section('content')

<div class="admin">

  {{-- title --}}
  <div class="section_title">
    <h1 class="container">ADMIN</h1>
  </div>

  <div class="container">

    <table>

      <thead>
        <tr>
          <th>Image</th>
          <th>Title</th>
          <th>Description</th>
          <th>Price</th>
          <th>Options</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($comics as $comic)
        <tr>
          <td class="td_path"> <img src=" {{$comic->path}} " alt=""> </td>
          <td class="td_title"> {{$comic->title}} </td>
          <td class="td_description"> {{$comic->description}} </td>
          <td class="td_price btn btn-price"> {{$comic->price}} € </td>
          <td class="td_options">
            <a class="btn" href=" {{route('comics.show', $comic->id)}} ">view</a>
            <a class="btn btn-edit" href=" {{route('comics.edit', $comic->id)}} ">edit</a>
              <form onclick="return confirm('Sei sicuro di voler eliminare questo elemento?')" action=" {{route('comics.destroy', $comic->id)}} " method="post">
                @csrf
                @method('DELETE')
                
                <button class="btn btn-delete" type="submit">Delete</button>
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>

    </table>

  </div>

</div>



@endsection