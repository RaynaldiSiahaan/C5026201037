@extends('layout.ceria')

@section('title', 'TAMBAH SEPATU')

@section('isikonten')
<div class="container m-4">

	<h1>Data Sepatu</h1>

	<a href="/praktikum"> Kembali</a>

	<br/>
	<br/>

	<form action="/praktikum/store" method="post">
		{{ csrf_field() }}
		Merk Sepatu <input type="text" name="merk" required="required"><br/>
		Stock Sepatu <input type="number" name="stock" required="required"> <br/>
		Ketersediaan  <input type="radio" id="hadir" name="tersedia" value="Y" >

        <label for="hadir">Tersedia</label><br>

        <span class="col-sm-1"></span><input type="radio" id="tidak" name="tersedia" value="N" checked="checked" >

        <label for="tidak">Tidak Tersedia</label><br>
		<input type="submit" value="Simpan Data">
	</form>
</div>
@endsection
