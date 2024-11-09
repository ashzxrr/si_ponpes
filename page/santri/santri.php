<?php 
require_once ('functions.php');
$santri =  query("SELECT * From tb_santri");
session_start();
    



?>
<script>
        function sortTable() {
            var table = document.getElementById("dataTable");
            var rows = table.rows;
            var arr = [];

            for (var i = 1; i < rows.length; i++) {
                var cells = rows[i].cells;
                var name = cells[0].innerText.trim();
                arr.push({ name: name, row: rows[i] });
            }

            arr.sort(function (a, b) {
                return a.name.localeCompare(b.name);
            });

            for (var i = 0; i < arr.length; i++) {
                table.appendChild(arr[i].row);
            }
        }
    </script>

<!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
        
        
            <div class="my-2"></div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Santri</h6>
                   

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIS</th>
                            <th>NamaLengkap</th>
                            <th>JenisKelamin</th>
                            <th>Tempat/Tanggal</th>
                            <th>Alamat</th>
                            <th>Detail</th>
                            
                        </tr>
                    </thead>
                   
                            <tbody>
                        <?php $no=1; ?>
          <?php 
                usort($santri, function ($a, $b) {
                    return $a['nama'] <=> $b['nama'];
                });
                foreach ($santri as $row ) : ?>
           
           
           
           <?php 
            $date = $row['tgl_lahir'];
           $newDate = date('d M Y', strtotime($date));
           
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nis']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?>   </td>
                <td>
                    <?php echo $row['tempat_lahir'];?>
                    ,
                    <?php echo $newDate;?>
                </td>
                <td><?php echo $row['alamat']; ?>   </td>
                <td>
                    <a href="?page=santri&aksi=detail&nis=<?php echo $row['nis']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                            <i class="fas fa-arrow-right fa-sm text-white-70"></i> 
                        </a>
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
        <!-- /.container-fluid -->