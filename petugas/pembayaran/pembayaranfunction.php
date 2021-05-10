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

		$id_pembayaran_dea = $data["id_pembayaran_dea"];
		$id_petugas_dea = htmlspecialchars($data["id_petugas_dea"]);
		$nisn = htmlspecialchars($data["nisn"]);
		$tgl_bayar = htmlspecialchars($data["tgl_bayar"]);
		$bulan_dibayar = $data["bulan_dibayar"];
		$tahun_dibayar = htmlspecialchars($data["tahun_dibayar"]);
		$id_spp_dea = htmlspecialchars($data["id_spp_dea"]);
		$jumlah_bayar = $data["jumlah_bayar"];

		$dea = "INSERT INTO pembayaran VALUES ('$id_pembayaran_dea', '$id_petugas_dea', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp_dea', '$jumlah_bayar') ";

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

	function hapus($id_pembayaran_dea){
		global $conn;

		mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran_dea = $id_pembayaran_dea ");

		return mysqli_affected_rows($conn);
	}


?>