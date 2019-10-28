<?php
	$a = 5;
	function tukar (&$a){
		$b = 25;
		$a = $b;
	}
	echo " Nilai awal a : ";
	echo $a;
	tukar ($a);
	echo " Nilai a setelah di tukar dengan b : ";
	echo $a;
?>