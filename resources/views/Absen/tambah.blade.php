@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

<div class="container m-4">
	<h1>Absen Pegawai</h1>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		<div class='col-sm-1'><b>Pegawai :</b></div> <select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select></div>
            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-1 control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                    });
                </script>
        <div class="form-group">
        <div class='col-sm-1'>
            <b>Status   &nbsp :</b>
        </div>

        <input type="radio" id="hadir" name="status" value="H" >

  <label for="hadir">HADIR</label><br>

  <span class="col-sm-1"></span><input type="radio" id="tidak" name="status" value="T" checked="checked" >

  <label for="tidak">TIDAK HADIR</label><br>
        </div>

        <div class="form-group">
        <div class='col-sm-4'>
		<input type="submit" value="Simpan Data">
        </div>
    </div>

	</form>
</div>
@endsection

