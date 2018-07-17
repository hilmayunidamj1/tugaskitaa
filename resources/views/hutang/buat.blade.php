@extends('layout')
@section('judul')
Buat hutang
@endsection
@section('konten')
<form action="{{ url('hutang') }}" method="post">
	{{ csrf_field() }}
	<label>Nama</label>
	<input type="text" name="nama" class="form-control"> 
	<label>Deskripsi</label>
	<input type="text" name="deskripsi" class="form-control">
	<input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection