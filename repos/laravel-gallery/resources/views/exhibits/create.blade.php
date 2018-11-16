@extends('layouts.app')

@section('content')

<div class="container">

<form class="form clearfix pb-3" action="/exhibits" method="post">
  @csrf
  <div class="form-group">
    <div class="form-group">
        <label for="piece_name" class="font-weight-bold">Piece Name</label>
        <input type="text" class="form-control" id="piece_name" name="piece_name" placeholder="Piece name">
    </div>
    <div class="form-group">
        <label for="artist_name" class="font-weight-bold">Artist</label>
        <input type="text" class="form-control" id="artist_name" name="artist_name" placeholder="Artist name">
    </div>
    <div class="form-group">
        <label for="year" class="font-weight-bold">Year</label>
        <input type="text" class="form-control" id="year" name="year" placeholder="Year">
    </div>
    <div class="form-group">
      <label for="url" class="font-weight-bold">URL</label>
      <input type="text" class="form-control" id="url" name="url" placeholder="URL">
    </div>
    <div class="form-group">
        <label for="description" class="font-weight-bold">Description</label>
        <textarea class="form-control" name="description" id="description" placeholder="Description..."></textarea>
    </div>
    <button type="submit" class="ml-2 btn btn-warning float-right">Update</button>
    <a href="/exhibits" class="btn btn-secondary float-right">Cancel</a>
  </div>

</form>

</div>

@endsection
