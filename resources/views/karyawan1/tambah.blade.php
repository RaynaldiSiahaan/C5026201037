@extends('layout.ceria')

@section('title', 'TAMBAH KARYAWAN')

@section('isikonten')
<div class="container m-4">

    <h1>Data Karyawan</h1>

    <a href="/karyawan1"> Kembali</a>

    <br/>
    <br/>

    <form action="/karyawan1/store" method="post">
        {{ csrf_field() }}
        Nama<input type="text" name="nama" required="required"><br/>
        Pangkat <input type="text" name="pangkat" required="required"> <br/>
        Gaji  <input type="text" id="gaji" name="tersedia" required="required">
        <input type="submit" value="Simpan Data">
    </form>
</div>
@endsection


