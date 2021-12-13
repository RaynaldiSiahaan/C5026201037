@extends('layout.ceria')

@section('title', 'DETAIL PEGAWAI')

@section('isikonten')

<div class="container m-4">

	<h1>DETAIL Pegawai</h1>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    Nama {{ $p->pegawai_nama }} <br/>
		Jabatan <{{ $p->pegawai_jabatan }} <br/>
		Umur {{ $p->pegawai_umur }} <br/>
		Alamat {{ $p->pegawai_alamat }} <br/>


	@endforeach
</div>
    @endsection


