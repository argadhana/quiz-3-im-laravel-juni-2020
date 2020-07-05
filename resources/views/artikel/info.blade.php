@extends('layouts.layouting')
@section('title', 'Dashboard')
@section('content')

<div class="container">
    <div>
        <h2>Judul: {{$artikel->judul}}</h2>
      <p>Slug: {{$artikel->slug}}</p>
      <br>
      <p>{{$artikel->isi}}</p>
      <p>{{$artikel->tag}} </p>
    </div>
      <a href="/artikel" class="btn btn-primary">kembali</a>
  </div>

@endsection
