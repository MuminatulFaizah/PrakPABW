<?php  
	$nama=$_POST['namasearch']; 
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn, "prak8");   
	$hasil=mysqli_query($conn,"SELECT nrp,nama,alamat,ID_Jur FROM mahasiswa where nama like '%$nama%'");  
	$jumlah=mysqli_num_rows($hasil);  
	echo "<br>";  
	echo "Ditemukan: $jumlah";  
	echo "<br>";  
	while($baris=mysqli_fetch_array($hasil))    {    
		echo "NRP : ";    
		echo $baris[0];    
		echo "<br>";  
		echo "Nama : ";    
		echo $baris[1];    
		echo "<br>";   
		echo "Alamat : ";    
		echo $baris[2];
		echo "<br>";    
		echo "ID Jurusan : ";    
		echo $baris[3];    
	}
?>