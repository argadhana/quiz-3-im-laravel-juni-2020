@extends('layouts.layouting')
@section('title', 'Edit')
@section('content')
    <div class="container">
        <form action="/artikel/{{$artikel->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <input type="text" class="form-control" name="judul" value=" {{$artikel->judul}} ">
        </div>
        <div class="form-group">
        <label for="content">Isi:</label>
        <textarea class="form-control" id="content" name="isi" >
            {{$artikel->isi}}
        </textarea>
        </div>
        <div class="form-group">
        <label for="tag">Tag:</label>
        <input type="text" class="form-control" name="tag" value="{{$artikel->tag}}" id="tag">
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
    </div>
@endsection
