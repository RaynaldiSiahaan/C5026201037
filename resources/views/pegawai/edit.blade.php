@extends('layout.ceria')

@section('title', 'EDIT PEGAWAI')

@section('isikonten')

<div class="container m-4">

	<h1>Edit Pegawai</h1>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <input required="required" name="alamat" value="{{ $p->pegawai_alamat }}"></textarea> <br/>
		<input type="submit" value="Simpan Data">

	</form>

	@endforeach
</div>
    @endsection


