<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data Mahasiswa</title> 
</HEAD> 
<BODY> 
	<h1>Simpan Data Mahasiswa</h1>
	<?php  
	$nrp = $_POST["nrp"]; 
	$nama = $_POST["nama"]; 
	$alamat = $_POST["alamat"]; 
	$jurusan = $_POST["jurusan"];
	$nama2 = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'];
	$lokasi = "foto/";
	$upload = move_uploaded_file($file_tmp, $lokasi.$nama2);
	$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal"); 
	mysqli_select_db($conn, "prak8"); 
	
	echo "Nrp      : $nrp <br>"; 
	echo "Nama     : $nama <br>";
	echo "alamat   : $alamat <br>";
	echo "jurusan  : $jurusan <br>";
	echo '<td style="border:1px solid #000000;" align="center">
		<img src="foto/'.$nama2.'" width="100"/><br/>
		</td>';
	
	$sql = "INSERT INTO mahasiswa (nrp,nama,alamat,foto,ID_Jur) 
			values ('$nrp','$nama','$alamat','$nama2','$jurusan') ";
	$hasil = mysqli_query($conn,$sql) or die (mysqli_error());
	if ($hasil) {
		echo "Simpan data berhasil dilakukan";
	} else  {
		echo "Tidak dapat menambah siswa";
	}
	?> 
</BODY> 
</HTML>