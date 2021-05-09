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

	function add($data){
		global $conn;

		$nisn = htmlspecialchars($data["nisn"]);
		$nis = htmlspecialchars($data["nis"]);
		$nama = htmlspecialchars($data["nama"]);
		$id_kelas_dea = $data["id_kelas_dea"];
		$alamat = htmlspecialchars($data["alamat"]);
		$no_telp = htmlspecialchars($data["no_telp"]);
		$id_spp_dea = $data["id_spp_dea"];

		$dea = "INSERT INTO siswa VALUES ('$nisn', '$nis', '$nama', '$id_kelas_dea', '$alamat', '$no_telp', '$id_spp_dea') ";

		mysqli_query($conn, $dea);

		return mysqli_affected_rows($conn);
	}

	function edit($data){
		global $conn;

		$nisn = htmlspecialchars($data["nisn"]);
		$nis = htmlspecialchars($data["nis"]);
		$nama = htmlspecialchars($data["nama"]);
		$id_kelas_dea = $data["id_kelas_dea"];
		$alamat = htmlspecialchars($data["alamat"]);
		$no_telp = htmlspecialchars($data["no_telp"]);
		$id_spp_dea = $data["id_spp_dea"];

		$dea = "UPDATE siswa SET nisn = '$nisn', nis = '$nis', nama = '$nama', id_kelas_dea = '$id_kelas_dea', alamat = '$alamat', no_telp = '$no_telp', id_spp_dea = '$id_spp_dea' WHERE nisn = $nisn ";

		mysqli_query($conn, $dea);

		return mysqli_affected_rows($conn);
	}

	function hapus($nisn){
		global $conn;

		mysqli_query($conn, "DELETE FROM siswa WHERE nisn = $nisn ");

		return mysqli_affected_rows($conn);
	}


?>