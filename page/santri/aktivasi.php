<?php 
	require_once ('functions.php');
	$nis = $_GET['nis'];
	

	if (aktivasi_santri($nis) > 0 ){

		echo "
                <script>
                
                alert('Berhasil Diaktivasi');
                window.location.href= '?page=santri&aksi=detail&nis=$nis';

                </script>
            ";
        } else {
            echo "
                <script>
                
                alert('Gagal Aktivasi');
                
                window.location.href= '?page=santri&aksi=detail&nis=$nis';
            </script>
            ";
        }



 ?>