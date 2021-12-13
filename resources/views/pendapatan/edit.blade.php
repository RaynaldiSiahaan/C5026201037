@extends('layout.ceria')

@section('title', 'EDIT PENDAPATAN')

@section('isikonten')
<div class="container m-4">
<h1> EDIT PENDAPATAN </h1>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		ID <input type="number" required="required" name="ID" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" required="required" name="bulan" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="number" required="required" name="tahun" value="{{ $p->Tahun }}"> <br/>
		Gaji <input type="number" required="required" name="gaji" value="{{ $p->Gaji }}"> <br/>
		Tunjangan <input type="number" required="required" name="tunjangan" value="{{ $p->Tunjangan}}"><br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
@endsection

