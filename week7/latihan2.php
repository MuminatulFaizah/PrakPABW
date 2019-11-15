<?php
function hitung ($nama, $warna= "red"){
	if(strlen($nama) > 20 ) {
			$harga = strlen($nama) * 700;
		} else if(strlen($nama) > 10) {
			$harga = strlen($nama) * 500;
		} else if(strlen($nama) > 0) {
			$harga = strlen($nama) * 300;
		}
		echo "<font color='".$warna."'> Nama $nama  dan harga bet $harga</font><br>" ;
	}
	hitung("faizah")
?>
