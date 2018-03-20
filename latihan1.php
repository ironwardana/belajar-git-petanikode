<!DOCTYPE html>
<html>
<head>
	<title>latihan 1 </title>
</head>
<body>
	<h1>BIODATA MAHASISWA</h1>
	<form action="http://localhost/phpdasar/perkuliahan/pertemuan2/tampilkandatadiri.php" method="GET">
		<label>Nama</label><input type="text" name="nama">
		<br>
		<label>alamat</label>
		<input type="textArea" name="alamat">
		<br>
		<label>jenis kelamin</label>
			<input type="radio" name="jeniskelamin" value="pria"> <label>pria</label>
			<input type="radio" name="jeniskelamin" value="wanita"><label>wanita</label><br>
		<label>Hobi</label>
			<input type="checkbox" name="hobi" value="sepak bola"><label>sepak bola</label>
			<input type="checkbox" name="hobi" value="membaca"><label>membaca</label><br>
		<label>Program studi</label>
			<input list="Programstudi" name="Programstudi">
			<datalist id="Programstudi">
				<option value="sistem informasi"></option>
				<option value="teknologi informasi"></option>
				<option value="teknik informatika"></option>
			</datalist><br>
		<input type="submit" name="kirim" value="kirim">
	</form>
</body>
</html>