<?php  
	require 'siswafunction.php';

	$id_kelas_dea = $_GET["id_kelas_dea"];
	$nisn = $_GET["nisn"];

	if (hapus($nisn) > 0) {
		echo "<script>
				alert('Data berhasil di hapus');
				document.location.href = '?p=siswa/home&id_kelas_dea=$id_kelas_dea';
		</script>";
	}else{
		echo "<script>
				alert('Data gagal di hapus');
				document.location.href = '?p=siswa/home&id_kelas_dea=$id_kelas_dea';
		</script>";
	}


?>