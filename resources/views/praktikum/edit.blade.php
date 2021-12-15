@extends('layout.ceria')

@section('title', 'EDIT DATA')

@section('isikonten')

<div class="container m-4">

	<h1>Edit Data</h1>

	<a href="/praktikum"> Kembali</a>

	<br/>
	<br/>

	@foreach($praktikum as $p)
	<form action="/praktikum/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodesepatu }}"> <br/>
		Merk Sepatu <input type="text" required="required" name="merk" value="{{ $p->merksepatu }}"> <br/>
		Jumlah Stock <input type="number" required="required" name="stock" value="{{ $p->stocksepatu }}"> <br/>
		Ketersediaan <input type="text" required="required" name="tersedia" value="{{ $p->tersedia }}"> <br/>
		<input type="submit" value="Simpan Data">

	</form>

	@endforeach
</div>
    @endsection


