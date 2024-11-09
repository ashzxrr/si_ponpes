 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Haii !! <?php echo $_SESSION['nama'] ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Buku Yang Sering Dipinjam</h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Excel</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">PDF</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Print</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Judul</th>
                      <th>Pengarang</th>
                    
                      <th>Total Pinjam</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Jelajah Matematika </td>
                      <td>Yudhistira</td>
                      <td><span class="badge bg-primary">1</span></td>
                      
                    </tr>
                     <tr>
                      <td>#</td>
                      <td>#### </td>
                      <td>####</td>
                      <td><span class="badge bg-primary">?</span></td>
                      
                    </tr> <tr>
                      <td>#</td>
                      <td>#### </td>
                      <td>####</td>
                      <td><span class="badge bg-primary">?</span></td>
                      
                    </tr> <tr>
                      <td>#</td>
                      <td>#### </td>
                      <td>####</td>
                      <td><span class="badge bg-primary">?</span></td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Anggota Yang Sering Meminjam</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
             <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>

                      <th>Id Anggota</th>
                      <th>Nama</th>
                      <th>No. Hp</th>
                    
                      <th>Total Pinjam</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>1000012</td>
                      <td>Ahmad </td>
                      <td>083854337646</td>
                      <td><span class="badge bg-primary">1</span></td>
                      
                    </tr>
                     <tr>
                      <td>#</td>
                      <td>#### </td>
                      <td>####</td>
                      <td>#####</td>
                      <td><span class="badge bg-primary">?</span></td>
                      
                    </tr> <tr>
                      <td>#</td>
                      <td>#### </td>
                      <td>####</td>
                      <td>#####</td>
                      <td><span class="badge bg-primary">?</span></td>
                      
                    </tr> <tr>
                      <td>#</td>
                      <td>#### </td>
                      <td>####</td>
                      <td>#####</td>
                      <td><span class="badge bg-primary">?</span></td>
                      
                    </tr>
                  </tbody>
                </table>
                 <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Excel</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">PDF</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Print</a>
                    </li>
                    
                  </ul>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
       
      </div>
    </section>