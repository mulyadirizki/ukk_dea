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

		$nama_kelas = htmlspecialchars($data["nama_kelas"]);
		$kompetensi_keahlian = htmlspecialchars($data["kompetensi_keahlian"]);


		$dea = "INSERT INTO kelas VALUES (NULL, '$nama_kelas', '$kompetensi_keahlian') ";

		mysqli_query($conn, $dea);

		return mysqli_affected_rows($conn);
	}

	function edit($data){
		global $conn;

		$id_kelas_dea = $data["id_kelas_dea"];
		$nama_kelas = htmlspecialchars($data["nama_kelas"]);
		$kompetensi_keahlian = htmlspecialchars($data["kompetensi_keahlian"]);

		$dea = "UPDATE kelas SET nama_kelas = '$nama_kelas', kompetensi_keahlian = '$kompetensi_keahlian' WHERE id_kelas_dea = $id_kelas_dea ";

		mysqli_query($conn, $dea);

		return mysqli_affected_rows($conn);
	}

	function hapus($id_kelas_dea){
		global $conn;

		mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas_dea = $id_kelas_dea ");

		return mysqli_affected_rows($conn);
	}


?>