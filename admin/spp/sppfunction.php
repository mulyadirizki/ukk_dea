<?php 
	
	include '../conn/koneksi.php';


	function query($query){
		global $conn;

		$result = mysqli_query($conn, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}

		return $rows;
	}

	function tambah($data){
		global $conn;

		$tahun = $data["tahun"];
		$nominal = $data["nominal"];


		$dea = "INSERT INTO spp VALUES (NULL, '$tahun', '$nominal') ";

		mysqli_query($conn, $dea);

		return mysqli_affected_rows($conn);
	}

	function edit($data){
		global $conn;

		$id_spp_dea = $data["id_spp_dea"];
		$tahun = $data["tahun"];
		$nominal = $data["nominal"];

		$dea = "UPDATE spp SET tahun = '$tahun', nominal = '$nominal' WHERE id_spp_dea = $id_spp_dea ";

		mysqli_query($conn, $dea);

		return mysqli_affected_rows($conn);
	}

	function hapus($id_spp_dea){
		global $conn;

		mysqli_query($conn, "DELETE FROM spp WHERE id_spp_dea = $id_spp_dea ");

		return mysqli_affected_rows($conn);
	}


?>