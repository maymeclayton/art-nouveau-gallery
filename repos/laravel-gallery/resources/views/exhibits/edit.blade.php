@extends('layouts.app')

@section('content')


<div class="container">

  <div class="row">
    <div class="col-4">
      <img src="{{ $e->url }}" alt="Card image cap" width="80%" height="80%">
    </div>
    <div class="col-8">
      <form class="form clearfix pb-3" action="/exhibits/{{ $e->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
          <div class="form-group">
              <label for="new_piece_name" class="font-weight-bold">Piece Name</label>
              <input type="text" class="form-control" id="new_piece_name" name="new_piece_name" value="{{ $e->piece_name }}" placeholder="Piece name">
          </div>
          <div class="form-group">
              <label for="new_artist_name" class="font-weight-bold">Artist</label>
              <input type="text" class="form-control" id="new_artist_name" name="new_artist_name" value="{{ $e->artist_name }}" placeholder="Artist name">
          </div>
          <div class="form-group">
              <label for="new_year" class="font-weight-bold">Year</label>
              <input type="text" class="form-control" id="new_year" name="new_year" value="{{ $e->year }}" placeholder="Year">
          </div>
          <div class="form-group">
            <label for="new_url" class="font-weight-bold">URL</label>
            <input type="text" class="form-control" id="new_url" name="new_url" value="{{$e->url }}"placeholder="URL">
          </div>
          <div class="form-group">
              <label for="new_description" class="font-weight-bold">Description</label>
              <textarea class="form-control" name="new_description" id="new_description" placeholder="Description...">{{ $e->description }}</textarea>
          </div>
          <button type="submit" class="ml-2 btn btn-warning float-right">Update</button>
          <button type="submit" class="ml-2 btn btn-warning float-right" >Delete</button>
          <a href="/exhibits" class="btn btn-secondary float-right">Cancel</a>
        </div>
        </form>
      </div>
    </div>
</div>

@endsection
