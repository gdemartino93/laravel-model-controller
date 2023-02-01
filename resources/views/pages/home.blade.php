@extends('layouts.main-layout')

@section('contents')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Original Title</th>
        <th scope="col">Nationality</th>
        <th scope="col">Date</th>
        <th scope="col">Vote</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($movies as $movie)
      <tr>
        <th scope="row">{{ $movie["id"] }}</th>
        <td>{{ $movie["title"] }}</td>
        <td>{{ $movie["original_title"] }}</td>
        <td>{{ $movie["nationality"] }}</td>
        <td>{{ $movie["date"] }}</td>
        <td>{{ $movie["vote"] }}</td>

      </tr>
    @endforeach

    </tbody>
  </table>
   
       
   
@endsection