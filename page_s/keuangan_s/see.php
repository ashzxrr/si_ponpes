<?php 
require_once ('functions.php');
$get = $_SESSION['data_santri'];

$query =$conn->query(" SELECT tb_santri.nis, tb_santri.nama, tbbiaya.kd_biaya, tbbiaya.namaBiaya, tbbiaya.jumlahBiaya, tbbiaya.ket from tb_santri join tbkeuangan on tb_santri.nis = tbkeuangan.nis join tbbiaya on tbkeuangan.kd_keuangan = tbbiaya.kd_keuangan where tb_santri.nis = $get");
	
$tampil = $query->fetch_assoc();

?>



<div class="container-fluid">
	                        
	        


<!-- Nested Row within Card Body -->
<div class="row" >
<div class="col-lg-12 my-1 ">
            <!-- Basic Card Example -->
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Keuangan Santri  </h6>
                    <h6 class="m-0 font-weight-bold text-info" ><?php echo $tampil['nama']; ?></h6>
                </div>
                <div class="card-body">
                	<div class="table-responsive" >
                		 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>KD Biaya</th>
                            <th>Nama Biaya</th>
                            <th>Jumlah</th>
                            <th>Ket</th>
                            
                        </tr>
                    </thead>
                   
                    <tbody>
                        <?php $no=1; ?>
                              <?php foreach ($query as $row ) : ?>
                                                  
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['kd_biaya']; ?></td>
                                <td><?php echo $row['namaBiaya']; ?></td>
                                <td><?php echo $row['jumlahBiaya']; ?></td>
                                <td class=" italic underline decoration-dotted text-black" ><?php echo $row['ket']; ?></td>

                            </tr>
                       <?php $no++; ?>
                       <?php endforeach; ?>
                    </tbody>
            </table>
                		
                	</div>
                </div>
            </div>

        </div>

</div>

</div>


<?php
require_once ('functions.php');
if (isset($_POST["save"])) {

if( tambah_santri($_POST) > 0 ){
echo "
<script>

alert('Data Berhasil Ditambahkan');
window.location.href= '?page=santri';

</script>
";
} else {
echo "
<script>

alert('Data Gagal Ditambahkan');
window.location.href= '?page=santri&aksi=tambah';

</script>
";
}
}


?>