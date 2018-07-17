@extends('layout')
@section('judul')
Detail hutang
@endsection
@section('konten')
<table class="table table-hover">
	<thead>
		<tr>
			<th>judul</th>
			<th>deskripsi</th>
			<th>Di buat tgl</th>
		</tr>
	</thead>
<tbody>
	<tr>
		<td>{{$data->nama}}</td>
		<td>{{$data->deskripsi}}</td>
		<td>{{$data->created_at}}</td>
	</tr>
</tbody>
</table>
@endsection
