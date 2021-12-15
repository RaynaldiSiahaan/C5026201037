@extends('layout.ceria')

@section('title', 'DETAIL KARYAWAN')

@section('isikonten')

<div class="container m-4">

	<h1>DETAIL Karyawan</h1>


	<br/>
	<br/>

	@foreach($karyawan1 as $p)
    <h1>
    Nama: {{ $p->Nama }} <br/>
	Pangkat: {{ $p->Pangkat }} <br/>
    Gaji: {{ number_format($p->Gaji ) }} <br/>
    </h1>

    <a href="/karyawan1"  class="btn btn-info" style="font-size:24px"> Kembali</a>

	@endforeach
</div>
    @endsection


