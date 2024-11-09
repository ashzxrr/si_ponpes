<?php
require_once ('functions.php');
	$kd_keuangan = $_GET['kd_keuangan'];
    $get    = $_GET['nis'];


         
    if( tambah_keuangan($_POST) > 0 ){
        echo "
            <script>
            
            alert('Keuangan Berhasil Ditambahkan');
            window.location.href= '?page=keuangan&aksi=see&nis=$get';

            </script>
        ";
    } else {
        echo "
            <script>
            
            alert('Keuangan Gagal Ditambahkan');
            window.location.href= '?page=keuangan&aksi=see&nis=$get';

        </script>
        ";
    }

?>