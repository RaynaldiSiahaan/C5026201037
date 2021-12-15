@extends('layout.ceria')

@section('title', 'DATA KARYAWAN')

@section('isikonten')

<div class="container m-4">
    <h1>Data Karyawan</h1>
    <div class="container" align="center">
        <form action="/karyawan1/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-success" value="CARI">
        </form>
    </div>
    <a href="/karyawan1/tambah" class="btn btn-info"> + Tambah Sepatu Baru</a>

    <br>
    <br>

    <table class="table table-success table-striped table-bordered">
        <thead>
        <tr>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
    </thead>
        @foreach($karyawan1 as $p)
        <tbody>
        <tr>
            <td>{{ $p->Nama }}</td>
            <td>{{ $p->Pangkat }}</td>
            <td>{{ number_format($p->Gaji )}}</td>
            <td>
                <a href="/karyawan1/detail/{{$p->NIP}}" class="btn btn-success">View</a>
                |
                <a href="/karyawan1/edit/{{ $p->NIP }}" class="btn btn-warning">Edit</a>
                |
                <a href="/karyawan1/hapus/{{ $p->NIP }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    </tbody>
        @endforeach
    </table>

    {{$karyawan1->links()}}
</div>
@endsection


