@extends('layouts.layouting')
@section('title', 'Tambah Data')
@section('content')
<div class="container">
	<form action="/artikel" method="post">
    @csrf
    <div class="form-group">
      <input type="text" class="form-control" name="judul" placeholder="judul">
    </div>
    <div class="form-group">
      <label for="content">Isi:</label>
      <textarea class="form-control" id="content" name="isi"></textarea>
    </div>
    <div class="form-group">
      <label for="tag">Tag:</label>
      <p style="font-size: 10px;">Tag</p>
      <input type="text" class="form-control" name="tag" id="tag">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
