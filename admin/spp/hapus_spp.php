<?php  
	require 'sppfunction.php';

	$id_spp_dea = $_GET["id_spp_dea"];

	if (hapus($id_spp_dea) > 0) {
		echo "<script>
				alert('Data berhasil di hapus');
				document.location.href = '?p=spp/index';
		</script>";
	}else{
		echo "<script>
				alert('Data gagal di hapus');
				document.location.href = '?p=spp/index';
		</script>";
	}


?>