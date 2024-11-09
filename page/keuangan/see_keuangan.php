<?php 
require_once ('functions.php');
$get = $_GET['nis'];

$query =$conn->query(" SELECT tb_santri.nis, tb_santri.nama, tbbiaya.kd_biaya, tbbiaya.namaBiaya, tbbiaya.jumlahBiaya, tbbiaya.ket from tb_santri join tbkeuangan on tb_santri.nis = tbkeuangan.nis join tbbiaya on tbkeuangan.kd_keuangan = tbbiaya.kd_keuangan where tb_santri.nis = $get");
$query2 =$conn->query(" SELECT tbkeuangan.kd_keuangan, tb_santri.nis  from tb_santri join tbkeuangan on tb_santri.nis = tbkeuangan.nis  where tb_santri.nis = $get");
$tampil = $query->fetch_assoc();
$tampil2 = $query2->fetch_assoc();

?>



<div class="container-fluid">

		
                      
                        <a href="?page=keuangan&aksi=tambah_ke&nis=<?php echo $tampil2['nis']; ?>&kd_keuangan=<?php echo $tampil2['kd_keuangan']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                        	<i class="fas fa-plus fa-sm text-white-50"></i> 
                        Tambah Keuangan</a>
                        <a href="export/export_excel.php?nis=<?php echo $tampil2['nis']; ?>&kd_keuangan=<?php echo $tampil2['kd_keuangan']; ?>" target="blank" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                        	<i class="fas fa-print fa-sm text-white-50"></i> 
                        Cetak ke Excel</a>
                        
                       
	                        
	       


<!-- Nested Row within Card Body -->
<div class="row" >
<div class="col-lg-10 my-1 ">
            <!-- Basic Card Example -->
            <div class="card shadow mb-2">
                <div class="card-header py-7">
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
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                   
                    <tbody>
                        <?php $no=1; ?>
                              <?php foreach ($query as $row ) : ?>
                                                  
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['kd_biaya']; ?></td>
                                
                                <td><?php echo $row['namaBiaya']; ?></td>
                                <td>Rp. <?php echo $row['jumlahBiaya']; ?></td>
                                <td><?php echo $row['ket']; ?></td>

                                <td>
                                      <a href="?page=keuangan&aksi=lunas&kd_biaya=<?php echo $row['kd_biaya']; ?>&nis=<?php echo$row['nis']; ?> " class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                            <i class="fas fa-arrow-right qfa-sm text-white-70"></i> 
                                        Lunas</a>
                                </td>

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
