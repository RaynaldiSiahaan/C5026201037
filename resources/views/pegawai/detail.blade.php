@extends('layout.ceria')

@section('title', 'EDIT PEGAWAI')

@section('isikonten')


	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    Nama {{ $p->pegawai_nama }} <br/>
		Jabatan <{{ $p->pegawai_jabatan }} <br/>
		Umur {{ $p->pegawai_umur }} <br/>
		Alamat {{ $p->pegawai_alamat }} <br/>


	@endforeach
    @endsection


