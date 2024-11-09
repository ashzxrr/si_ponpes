<?php 
	
	$conn = mysqli_connect("localhost", "root", "", "perpustakaan");




	function query($query){
		global $conn;

		$result = mysqli_query($conn, $query);
	    $rows =[];
		while ($row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}

		return $rows; 
	}

	// tambah petugas

	function tambah_petugas($data){
			global $conn;

				$id_pengguna = $data ['id_pengguna'];
				$nama_petugas = $data ['nama_petugas'];
				$username = $data ['username'];
				$password = $data ['password'];
				$alamat = $data ['alamat'];
				$no_hp = $data ['no_hp'];
				$level = $data ['level'];

				$query = "INSERT INTO pengguna values ('$id_pengguna', '$nama_petugas', '$username', '$password', '$alamat', '$no_hp', '$level' ) ";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);

	}

	//hapus petugas

	function hapus_petugas($id_pengguna){
		global $conn;
		mysqli_query($conn, "DELETE FROM pengguna where id_pengguna=$id_pengguna");
		return mysqli_affected_rows($conn);
	}

	// ubah petugas

	function ubah_petugas($data) {
			global $conn;	
			$id_pengguna = $data ['id_pengguna'];
			$username = $data ['username'];
			$password = $data ['password'];
			$nama_petugas = $data ['nama_petugas'];
			$alamat = $data ['alamat'];
			$no_hp = $data ['no_hp'];
			$level = $data ['level'];

			$query = "UPDATE pengguna SET
						id_pengguna='$id_pengguna',
						nama_petugas = '$nama_petugas',
						username = '$username',
						password = '$password',
						alamat = '$alamat',
						no_hp = '$no_hp',
						level = '$level'
						where id_pengguna=$id_pengguna
			";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);

		}

		// tambah parkir
	function tambah_parkir($data){
			global $conn;
			$id_parkir = $data ['id_parkir'];
			$tanggal = $data ['tanggal'];
			$waktu_masuk = $data ['waktu_masuk'];
			$harga = $data ['harga'];
			$status = $data ['status'];
		
			$query = "INSERT INTO data_parkir values ('$id_parkir', '$tanggal', '$waktu_masuk', '$harga', '$status') ";

				mysqli_query($conn, $query);
				return mysqli_affected_rows($conn);
		}

		// keluar parkir

		function keluar_parkir($id_parkir){
			global $conn;
			$tgl = date ('y-m-d');
			$jumlah = ('3000');
			$id_parkir = $_GET['id_parkir'];
			mysqli_query($conn, "UPDATE data_parkir set status ='BAYAR' where id_parkir=$id_parkir ");
			mysqli_query($conn, "INSERT into pemasukan values ('$tgl', '3000' ) ");
		

			return mysqli_affected_rows($conn);
		}

?>