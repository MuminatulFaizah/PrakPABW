<!DOCTYPE HTML>
<HTML> 
<HEAD>    
	<title>Simpan Buku Tamu</title> 
</HEAD> 
<BODY> 
	<h1>Simpan Buku Tamu MySQL</h1> 
	<?php 
	$nama = $_POST["nama"]; 
	$email = $_POST["email"]; 
	$komentar = $_POST["komentar"]; 
	$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal"); 
	mysqli_select_db($conn, "prak8"); 
	echo "Nama     : $nama <br>"; 
	echo "Email    : $email <br>"; 
	echo "Komentar : $komentar <br>"; 
	$sql = "INSERT INTO bukutamu (nama, email, komentar) 
			values ('$nama','$email','$komentar') ";
	$hasil = mysqli_query($conn,$sql);
	if ($hasil) {
		echo "Simpan data berhasil dilakukan";
	} else  {
		echo "Tidak dapat menambah siswa";
	}
	?> 
</BODY> 
</HTML> 