@extends('layout')
@section('title','form')

@section('content')
<h1>Hello Jim</h1>
<form action="/form" method="POST">
    @csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" value="{{$data->name}}" name="db_name">
  </div>
  <div class="mb-3">
    <label for="birthday" class="form-label">Birthday</label>
    <input type="date" class="form-control" id="birthday" value="{{$data->bdate}}" name="db_birthday">
  </div>
  <div class="mb-3">
    <label for="ig" class="form-label">IG</label>
    <input type="text" class="form-control" id="ig" value="{{$data->ig}}" name="db_ig">
  </div>
  <div class="mb-3">
    <label for="picture" class="form-label">Default file input example</label>
    <input class="form-control" type="file" id="picture"  name="db_picture">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</table>
@endsection


