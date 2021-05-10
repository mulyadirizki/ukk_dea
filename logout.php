<?php  	
	include 'conn/koneksi.php';
	
	session_start();
	session_destroy();
	session_unset();

	header("location: .");


?>