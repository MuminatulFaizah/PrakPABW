<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
<form action="TM_7hasil.php" method="POST">
	<label for="name">Nama :</label>
	<input type="text" name="nama" id="nama" required=""> <br><br>
	<label for="alamat">Alamat :</label>
	<input type="text" name="alamat" id="alamat"><br><br>
	<label>Jenis kelamin :</label>
	<input type="radio" name="jenis_kelamin" id="laki" value="laki-laki" checked="">
	<label for="laki">laki-laki &nbsp</label> 
	<input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
	<label for="perempuan">Perempuan &nbsp</label> <br><br>
	<label>Golongan darah : </label>
	<select name="golongan_darah">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="O">O</option>
		<option value="AB">AB</option>
	</select> <br><br>
	<label>Hoby : </label>
	<input type="checkbox" name="hobi[]" id="travelling" value="Travelling"><label for="travelling">Travelling</label>
	<input type="checkbox" name="hobi[]" id="membaca" value="Membaca"><label for="membaca">Membaca</label>
	<input type="checkbox" name="hobi[]" id="footsal" value="Footsal"><label for="footsal">Footsal</label>
	<input type="checkbox" name="hobi[]" id="basket" value="Basket"><label for="basket">Basket</label>
	<input type="checkbox" name="hobi[]" id="memasak" value="Memasak"><label for="memasak">Memasak</label> <br><br>
	<label>Keterangan</label><br>
	<textarea name="keterangan"></textarea>
	<br>
	<input type="submit" name="submit" value="Kirim">
</form>
</body>
</html>