<html>
<head>
	<title>Tambah data pendapatan</title>
</head>
<body>


	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		ID <input type="text" name="ID" required="required"> <br/>
		Bulan <input type="text" name="bulan" required="required"> <br/>
		Tahun <input type="number" name="tahun" required="required"> <br/>
		Gaji <input type="number" name="gaji" required="required"> <br/>
		Tunjangan <input type="number" name="tunjangan" required="required"><br/>
        <input type="submit" value="Simpan Data">
	</form>

</body>
</html>
