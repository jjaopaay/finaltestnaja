@extends('layout')
@section('title','form')

@section('content')
<h1>Hello Jim</h1>
<form action="/form" method="POST">
    @csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" placeholder="name" name="db_name">
  </div>
  <div class="mb-3">
    <label for="birthday" class="form-label">Birthday</label>
    <input type="date" class="form-control" id="birthday" placeholder="birthday" name="db_birthday">
  </div>
  <div class="mb-3">
    <label for="ig" class="form-label">IG</label>
    <input type="text" class="form-control" id="ig" placeholder="ig@" name="db_ig">
  </div>
  <div class="mb-3">
    <label for="picture" class="form-label">Default file input example</label>
    <input class="form-control" type="file" id="picture" name="db_picture">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
<table border="2px">
    <th>Name</th>
    <th>Birthday</th>
    <th>IG</th>
    <th>Picture</th>
    <th>Tools</th>

    @foreach ($dataview as $Araigordai)

    <tr>
        <td>{{$Araigordai->name}}</td>
        <td>{{$Araigordai->bdate}}</td>
        <td>{{$Araigordai->ig}}</td>
        <td>{{$Araigordai->picture}}</td>
        <td>
            <a href="/form/{{$Araigordai->id}}/edit"  class="btn btn-success">edit</a>
            {{-- <button type="button" class="btn btn-warning">Edit</button> --}}

            <form action="/form/{{$Araigordai->id}}" method="POST">
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        </td>
    </tr>

    @endforeach

</table>
@endsection


