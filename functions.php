<?php 
	
	$conn = mysqli_connect("localhost", "root", "", "ponpes");


 

	function query($query){
		global $conn;

		$result = mysqli_query($conn, $query);
	    $rows =[];
		while ($row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}

		return $rows; 
	}


	// log function

	function login(){
		global $conn;
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = $conn->query("select * from tb_petugas where username='$username' and password='$password' ");
        $sql2 = $conn->query("select * from tb_santri where username='$username' and password='$password' ");

		$dataPetugas = $sql->fetch_assoc();
        $datasantri = $sql2->fetch_assoc();

		$ketemu = $sql->num_rows;
        $ketemu2 = $sql2->num_rows;

		if ($ketemu>=1) {
			session_start();

			if ($dataPetugas['level']=="petugas") {
				$_SESSION['hakpetugas'] = $dataPetugas['level'];
				$_SESSION['namapetugas'] = $dataPetugas['nama_petugas'];
			

				echo "
					<script>
					alert('Selamat Datang');
					window.location.href= 'halaman.php';
					</script>
					
				";
 
				
			}
		}elseif($ketemu2>=1){
            session_start();

            if ($datasantri['level']=="user") {
                $_SESSION['hakuser'] = $datasantri['level'];
                $_SESSION['nama_santri'] = $datasantri['nama'];
                $_SESSION['data_santri'] = $datasantri['nis'];

                $_SESSION['foto_santri'] = $datasantri['foto'];
 
                echo "
					<script>
					alert('Selamat Datang');
					window.location.href= 'halaman_user.php';
					</script>
					
				";
            }

        } else{

			?>
			<script type="text/javascript">
				alert("Username dan Password Salah");
				alert("Silahkan Coba Lagi");

			</script>

			<?php
		}
	
		return mysqli_affected_rows($conn);
	}

	// tambah petugas

	function tambah_santri($data){
			global $conn;
			$nama = $_POST['nama'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$tempat_lahir = $_POST['tempat_lahir'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$alamat = $_POST['alamat'];
			$no_telp = $_POST['no_telp'];
			$email = $_POST['email'];
			$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
			$orangtua = $_POST['orangtua'];			
			$tahun_masuk = $data['tahun_masuk'];
			$program_studi = $data['program_studi'];
			$sekolah = $data['sekolah'];
		
			$level	= "user";
			

			$foto = upload();
			if (!$foto) {
				return $foto;
			}
				$query = "INSERT INTO tb_santri values ( '', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tgl_lahir', '$alamat', '$no_telp', '$email', '$pendidikan_terakhir', '$orangtua', '$foto', '$tahun_masuk', '$program_studi', '$sekolah','','','$level' ) ";

				
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	//function upload

	function upload(){

		$nama_file = $_FILES['foto']['name'];
		$ukuranfile = $_FILES['foto']['size'];
		$error = $_FILES['foto']['error'];
		$tmpname = $_FILES['foto']['tmp_name'];

		// cek apa kah tidak ada gambar yang diupload

		if ($error===4) {
			echo  " 
		            <script>
		            
		            alert('Pilih Foto terlebih dahulu');
		            </script>
		        ";
		        return false;
		}

		// cek apakah yang diupload adalah foto
		$tipefotovalid = ['jpg','jpeg', 'png'];
		$tipefoto = explode('.', $nama_file);
		$tipefoto = strtolower(end($tipefoto));
		if (!in_array($tipefoto, $tipefotovalid)) {
			echo  "
		            <script>
		            
		            alert('Silahkan Upload Foto!!');
		            </script>
		        ";
				return false;
		}

		//jika ukurunannya terlalu besar

		if ($ukuranfile> 1000000) {
			echo  "
			<script>
			
			alert('Ukuran Foto terlalu besar');
			alert('Ukuran harus kurang dari 1 mb');
			</script>
		";
		return false;
		}

		//lolos pengecekan

		//generete

		$nama_file_baru = uniqid();
		$nama_file_baru .= '.';
		$nama_file_baru .= $tipefoto;

		move_uploaded_file($tmpname, 'img/fotosantri/' . $nama_file_baru);
		return $nama_file_baru;


	}

	//aktivasi

		function aktivasi_santri($nis) {
			global $conn;	
			$nis = $_GET['nis'];
			$set = $_GET['nis'];

			$query = "UPDATE tb_santri SET

						username = '$set',
						password = '$set'

						where nis = '$nis'";

	
			mysqli_query($conn, $query);

			$query2 = "INSERT into tbkeuangan values ('', '$nis')";
			mysqli_query($conn, $query2);


			return mysqli_affected_rows($conn);

		}


	// edit santri

	function edit_santri($data) {
			global $conn;	
			$nis = $data['nis'];
			$nama = $data['nama'];
			$jenis_kelamin = $data['jenis_kelamin'];
			$tempat_lahir = $data['tempat_lahir'];
			$tgl_lahir = $data['tgl_lahir'];
			$alamat = $data['alamat'];
			$no_telp = $data['no_telp'];
			$email = $data['email'];
			$pendidikan_terakhir = $data['pendidikan_terakhir'];
			$orangtua = $data['orangtua'];

			$tahun_masuk = $data['tahun_masuk'];
			$program_studi = $data['program_studi'];
			$sekolah = $data['sekolah'];

			$query = "UPDATE tb_santri SET

						nama = '$nama',
						jenis_kelamin = '$jenis_kelamin',
						tempat_lahir = '$tempat_lahir',
						tgl_lahir = '$tgl_lahir',
						alamat = '$alamat',
						no_telp = '$no_telp',
						email = '$email',
						pendidikan_terakhir = '$pendidikan_terakhir',
						orangtua = '$orangtua',
						tahun_masuk = '$tahun_masuk',
						
						program_studi = '$program_studi',
						sekolah = '$sekolah'

						where nis = '$nis'";


				
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);

		} 
		//function upload

	
	function change_foto($data){
		global $conn;
		$nis = $data['nis'];
		$foto = chg();
			if (!$foto) {
				return $foto;
			}

		$query = "UPDATE tb_santri set

					foto = '$foto'

					where nis = $nis ";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function chg(){
		$nama_file = $_FILES['foto']['name'];
		$ukuranfile = $_FILES['foto']['size'];
		$error = $_FILES['foto']['error'];
		$tmpname = $_FILES['foto']['tmp_name'];

		// cek apa kah tidak ada gambar yang diupload

		if ($error===4) {
			echo  " 
		            <script>
		            
		            alert('Pilih Foto terlebih dahulu');
		            </script>
		        ";
		        return false;
		}

		// cek apakah yang diupload adalah foto
		$tipefotovalid = ['jpg','jpeg', 'png'];
		$x = explode('.', $nama_file);
		$tipefoto = strtolower(end($x));
		if (!in_array($tipefoto, $tipefotovalid)) {
			echo  "
		            <script>
		            
		            alert('Silahkan Upload Foto!!');
		            </script>
		        ";
				return false;
		}

		//jika ukurunannya terlalu besar

		if ($ukuranfile> 1000000) {
			echo  "
		            <script>
		            
		            alert('Ukuran Foto terlalu besar');
					alert('Ukuran harus kurang dari 1 mb');
		            </script>
		        ";
				return false;

		}

		//lolos pengecekan

		//generete

		$nama_file_baru = uniqid();
		$nama_file_baru .= '.';
		$nama_file_baru .= $tipefoto;

		move_uploaded_file($tmpname, 'img/fotosantri/' . $nama_file_baru);
		return $nama_file_baru;
		
	}

		
		// tambah keuangan
		function tambah_keuangan($data){
			global $conn;
			$kd_keuangan = $_GET['kd_keuangan'];
			$biaya1 = 'Biaya Pendaftaran';
			$biaya2 = 'SPP';
			$biaya3 = 'DPP';
			$biaya4 = 'Kelengkapan Santri';

			$jumlah1 = '100000';
			$jumlah2 = '100000';
			$jumlah3 = '500000';
			$jumlah4 = '1000000';


			$ketlunas = 'Lunas';
			$ket = '..........';
			$rupiah1 = number_format($jumlah1, 0, ',', '.');
			$rupiah2 = number_format($jumlah2, 0, ',', '.');
			$rupiah3 = number_format($jumlah3, 0, ',', '.');
			$rupiah4 = number_format($jumlah4, 0, ',', '.');
			 
  			
			 
		
			$query1 = "INSERT INTO tbbiaya values ('','$kd_keuangan', '$biaya1', '$rupiah1', '$ketlunas') ";

				mysqli_query($conn, $query1);
				$query2 = "INSERT INTO tbbiaya values ('','$kd_keuangan', '$biaya2', '$rupiah2', '$ket') ";

				mysqli_query($conn, $query2);
				$query3 = "INSERT INTO tbbiaya values ('','$kd_keuangan', '$biaya3', '$rupiah3', '$ket') ";

				mysqli_query($conn, $query3);
				
				$query4 = "INSERT INTO tbbiaya values ('','$kd_keuangan', '$biaya4', '$rupiah4', '$ket') ";

				mysqli_query($conn, $query4);
				return mysqli_affected_rows($conn);


		}

		// edit biaya

	function lunas($id_keuangan) {
			global $conn;	
			$kd = $_GET['kd_biaya'];
			$ket = 'Lunas';

			$query = "UPDATE tbbiaya SET

						
						ket = '$ket'

						where kd_biaya = $kd";
	
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);

		}
		//hapus biaya

	function hapus_keuangan($id_keuangan){
		global $conn;
		mysqli_query($conn, "DELETE FROM tbkeuangan where id_keuangan=$id_keuangan");
		return mysqli_affected_rows($conn);

	}
?>