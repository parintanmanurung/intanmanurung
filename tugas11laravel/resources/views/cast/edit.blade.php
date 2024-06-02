@extends('layouts.master')

@section('title')
Halaman Edit Pemain Film
@endsection

@section('content')

<form method="POST" action="/cast/{{$cast->id}}">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  @csrf
  @method("put")
  <div class="form-group">
    <label>Nama pemain film</label>
    <input type="text" value="{{$cast->nama}}" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label>Umur pemain film</label>
    <input type="integer" value="{{$cast->umur}}" class="form-control" name="umur">
  </div>
  <div class="form-group">
    <label>Bio pemain film</label>
    <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
