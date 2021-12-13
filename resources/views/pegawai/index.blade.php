@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

<div class="container m-4">
	<h1>Data Pegawai</h1>
    <div class="container" align="center">
        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-success" value="CARI">
        </form>
    </div>
	<a href="/pegawai/tambah" class="btn btn-info"> + Tambah Pegawai Baru</a>

	<br>
	<br>

	<table class="table table-success table-striped table-bordered">
        <thead>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
    </thead>
		@foreach($pegawai as $p)
        <tbody>
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>

			<td>
                <a href="/pegawai/detail/{{$p->pegawai_id}}" class="btn btn-success">View Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>

    {{$pegawai->links()}}
</div>
@endsection
