<?php  
	require 'kelasfunction.php';

	$id_kelas_dea = $_GET["id_kelas_dea"];

	if (hapus($id_kelas_dea) > 0) {
		echo "<script>
				alert('Data berhasil di hapus');
				document.location.href = '?p=kelas/index';
		</script>";
	}else{
		echo "<script>
				alert('Data gagal di hapus');
				document.location.href = '?p=kelas/index';
		</script>";
	}


?>