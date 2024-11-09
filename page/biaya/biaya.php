<?php 
require_once ('functions.php');
$biaya =  query("SELECT * From tbbiaya");
session_start();
    



?>
<!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="my-2"></div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Biaya</h6>
                   

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>KD Biaya</th>
                            <th>KD Keuangan</th>
                            <th>Nama Biaya</th>
                            <th>Jumlah</th>
                            
                        </tr>
                    </thead>
                   
                            <tbody>
                        <?php $no=1; ?>
                              <?php foreach ($biaya as $row ) : ?>
                              
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['kd_biaya']; ?></td>
                <td><?php echo $row['kd_keuangan']; ?></td>
                <td><?php echo $row['namaBiaya']; ?></td>
                <td> Rp. <?php echo $row['jumlahBiaya']; ?></td>

            </tr>
       <?php $no++; ?>
       <?php endforeach; ?>
                    </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->