@extends('layout.ceria')

@section('title', 'PENDAPATAN PEGAWAI')

@section('isikonten')

<div class="container m-4">

	<h1>Tabel Pendapatan</h1>

	<a href="/pendapatan/tambah" class="btn btn-info"> + Tambah Data Pendapatan</a>

	<br/>
	<br/>

	<table class="table table-success table-striped table-bordered">
        <thead>
		<tr>
			<th>ID</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Jumlah Gaji</th>
			<th>Jumlah Tunjangan</th>
            <th>Opsi</th>
		</tr>
    </thead>
		@foreach($pendapatan as $p)
        <tbody>
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
			<td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>


</div>
@endsection
