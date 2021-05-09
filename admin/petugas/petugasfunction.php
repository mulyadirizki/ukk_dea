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

		$id_petugas_dea = $data["id_petugas_dea"];
		$username = $data["username"];
		$password = $data["password"];
		$nama_petugas = $data["nama_petugas"];
		$level = "petugas";


		$dea = "INSERT INTO petugas VALUES ( '$id_petugas_dea', '$username', '$password', '$nama_petugas', '$level') ";

		mysqli_query($conn, $dea);

		return mysqli_affected_rows($conn);
	}

	function edit($data){
		global $conn;

		$id = $data["id"];
		$id_petugas_dea = $data["id_petugas_dea"];
		$username = $data["username"];
		$password = $data["password"];
		$nama_petugas = $data["nama_petugas"];
		$level = 'petugas';

		$dea = "UPDATE petugas SET id_petugas_dea = '$id_petugas_dea', username = '$username', password = '$password', nama_petugas = '$nama_petugas' WHERE id = $id ";

		mysqli_query($conn, $dea);

		return mysqli_affected_rows($conn);
	}

	function hapus($id_petugas_dea){
		global $conn;

		mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas_dea = $id_petugas_dea ");

		return mysqli_affected_rows($conn);
	}


?>