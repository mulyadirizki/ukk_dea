<?php  
	require 'pembayaranfunction.php';

	$id_pembayaran_dea = $_GET["id_pembayaran_dea"];

	if (hapus($id_pembayaran_dea) > 0) {
		echo "<script>
				alert('Data berhasil di hapus');
				document.location.href = '?p=pembayaran/index';
		</script>";
	}else{
		echo "<script>
				alert('Data gagal di hapus');
				document.location.href = '?p=pembayaran/index';
		</script>";
	}


?>