@extends('layout.ceria')

@section('title', 'DATA STOCK SEPATU')

@section('isikonten')

<div class="container m-4">
	<h1>Data Sepatu</h1>
    <div class="container" align="center">
        <form action="/praktikum/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Sepatu .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-success" value="CARI">
        </form>
    </div>
	<a href="/praktikum/tambah" class="btn btn-info"> + Tambah Sepatu Baru</a>

	<br>
	<br>

	<table class="table table-success table-striped table-bordered">
        <thead>
		<tr>
            <th>Nama Pegawai</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
    </thead>
		@foreach($praktikum as $p)
        <tbody>
		<tr>
            <td>{{ $p->pegawai_nama}}</td>
			<td>{{ $p->merksepatu }}</td>
			<td>{{ $p->stocksepatu }}</td>
            <td>{{ $p->tersedia }}</td>
			<td>
                <a href="/praktikum/detail/{{$p->kodesepatu}}" class="btn btn-success">View Detail</a>
                |
				<a href="/praktikum/edit/{{ $p->kodesepatu }}" class="btn btn-warning">Edit</a>
				|
				<a href="/praktikum/hapus/{{ $p->kodesepatu }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>

    {{$praktikum->links()}}
</div>
@endsection
