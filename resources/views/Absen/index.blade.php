@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

<div class="container m-4">

	<h3>Data Pegawai</h3>

	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped table-bordered">
    <thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">ID Pegawai</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Status</th>
			<th scope="col">Opsi</th>
		</tr>
    </thead>
		@foreach($absen as $p)
        <tbody>
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->IDPegawai}}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
        </tbody>
		@endforeach
	</table>
    {{$absen->links()}}

</div>


@endsection

