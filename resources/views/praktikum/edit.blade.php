@extends('layout.ceria')

@section('title', 'EDIT DATA')

@section('isikonten')

<div class="container m-4">

	<h1>Edit Data</h1>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Merk Sepatu <input type="text" required="required" name="merk" value="{{ $p->merksepatu }}"> <br/>
		Jumlah Stock <input type="number" required="required" name="stock" value="{{ $p->stocksepatu }}"> <br/>
		Ketersediaan <input type="text" required="required" name="tersedia" value="{{ $p->tersedia }}"> <br/>
		<input type="submit" value="Simpan Data">

	</form>

	@endforeach
</div>
    @endsection


