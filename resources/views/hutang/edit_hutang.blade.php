@extends('layout')
@section('judul')
Edit hutang
@endsection
@section('konten')
<form action="{{ url('hutang/'.$data->id) }}" method="post">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field() }}
	<label>nama</label>
	<input type="text" name="nama" value="{{$data->nama}}" class="form-control">
	<label>jumlah_hutang</label>
	<input type="text" name="deskripsi" value="{{$data->deskripsi}}" class="form-control">
	<input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection