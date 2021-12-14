@extends('layout.ceria')

@section('title', 'DETAIL SEPATU')

@section('isikonten')

<div class="container m-4">

	<h1>DETAIL Sepatu</h1>


	<br/>
	<br/>

	@foreach($praktikum as $p)
    <h1>
    Nama Pegawai: {{ $p->pegawai_nama}}<br/>
    Merk Sepatu: {{ $p->merksepatu }} <br/>
    Stock Sepatu: {{ $p->stocksepatu }} <br/>
	Ketersediaan: {{ $p->tersedia }} <br/>
    </h1>

    <a href="/praktikum"  class="btn btn-info" style="font-size:24px"> Kembali</a>

	@endforeach
</div>
    @endsection


