<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body>
<h1>Cetak data</h1>
<?php  
	$data = [
				"nama"=>$_POST["nama"],
				"alamat"=>$_POST["alamat"],
				"jenis_kelamin"=>$_POST["jenis_kelamin"],
				"golongan_darah"=>$_POST["golongan_darah"],
				"hobi"=>$_POST["hobi"],
				"keterangan"=>$_POST["keterangan"]
			];
 
		echo "Nama : "; 
		echo $data['nama'];	
		echo "<br>";
		echo "Alamat : "; 
		echo $data['alamat'];	
		echo "<br>";
		echo "Jenis Kelamin : "; 
		echo $data['jenis_kelamin'];
		echo "<br>";
		echo "Golongan Darah : "; 
		echo $data['golongan_darah'];
		echo "<br>";
		echo "Hobi : "; 
		foreach ($data['hobi'] as $value) {
			echo "$value, ";
		}
		echo "<br>";
		echo "Keterangan : "; 
		echo $data['keterangan'];
?>
</body>
</html>