@extends('layout.ceria')

@section('title', 'EDIT DATA')

@section('isikonten')

<div class="container m-4">

    <h1>Edit Data</h1>

    <a href="/karyawan1"> Kembali</a>

    <br/>
    <br/>

    @foreach($karyawan1 as $p)
    <form action="/karyawan1/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="nip" value="{{ $p->NIP }}"> <br/>
        Nama <input type="text" required="required" name="nama" value="{{ $p->Nama }}"> <br/>
        Pangkat <input type="text" required="required" name="pangkat" value="{{ $p->Pangkat }}"> <br/>
        Gaji <input type="text" required="required" name="gaji" value="{{ $p->Gaji }}"> <br/>
        <input type="submit" value="Simpan Data">

    </form>

    @endforeach
</div>
    @endsection



