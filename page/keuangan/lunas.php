<?php 
	require_once ('functions.php');
	$kd_biaya = $_GET['kd_biaya'];
    $get    = $_GET['nis'];
	

	if (lunas($kd_biaya) > 0 ){

		echo "
                <script>               
                alert('Pelunasan Berhasil');
                window.location.href= '?page=keuangan&aksi=see&nis=$get';
                </script>
            ";
        }
 


 ?>