  <?php 
        require_once ('functions.php');
        $dafatar_anggota =  query("SELECT * From tb_anggota");


 ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Haii !! <?php echo $_SESSION['nama'] ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Anggota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Anggota</h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                   <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> 
                        <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> 
                        <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button>
                        <div class="col-sm-20 col-md-6">
                          <div id="example1_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                          </div>
                  </ul>
                </div>

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Status</th>             
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                 

                 
                 	<?php $no=1; ?>
                  <?php foreach ($dafatar_anggota as $row ) : ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['id_anggota']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['alamat']; ?>   </td>
                        <td><?php echo $row['no_hp']; ?>   </td>
                        <td><?php echo $row['status']; ?>   </td>
                   
                        
                        
                        
                        <td>
                            <a href="?page=anggota&aksi=ubah&id_anggota=<?php echo $row['id_anggota']; ?>" 
                            class=" btn btn-info" ><i class="fa fa-edit"></i> Update </a>
                          
                           
                        </td>


                    </tr>
               <?php $no++; ?>
               <?php endforeach; ?>
				

				</tbody>
                 

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>