<?php  

	$conn = mysqli_connect("localhost", "root", "", "ukk_dea");

	if(mysqli_connect_errno()) {
		echo "Koneksi ke Database gagal! ". mysqli_connect_error();	
	}


?>