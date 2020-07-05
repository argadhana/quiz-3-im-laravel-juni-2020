@extends('layouts.layouting')
@section('title', 'Dashboard')
@section('content')
<div class="container">
	<a href="/artikel/create" class="btn btn-success mb-4">Tambah Artikel</a>
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>ID</th>
        <th>judul</th>
        <th>Tag</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($artikel as $k => $data)

      <tr>
        <td>{{$k + 1}}</td>
		<td>{{$data->judul}}</td>
		<td>{{$data->tag}}</td>
		<td>
			<a href="artikel/{{$data->id}}" class="btn btn-info">Info</a>
			<a href="artikel/{{$data->id}}/edit" class="btn btn-warning">Edit</a>
      <form action="/artikel/{{$data->id}}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
		</td>
      </tr>

    @endforeach
    </tbody>
  </table>
</div>
@endsection

@push('scripts')

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script>

@endpush

