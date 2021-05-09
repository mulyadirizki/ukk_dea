<?php  
	require 'petugasfunction.php';

	$id_petugas_dea = $_GET["id_petugas_dea"];

	if (hapus($id_petugas_dea) > 0) {
		echo "<script>
				alert('Data berhasil di hapus');
				document.location.href = '?p=petugas/index';
		</script>";
	}else{
		echo "<script>
				alert('Data gagal di hapus');
				document.location.href = '?p=petugas/index';
		</script>";
	}


?>