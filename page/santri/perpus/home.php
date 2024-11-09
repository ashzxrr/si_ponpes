
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>1</h3>

                <p>Daftar Buku</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>1</h3>

                <p>Daftar Anggota</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>1</h3>

                <p>Peminjaman</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>1</h3>

                <p>Laporan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
                       <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label >Kode Peminjaman</label>
                    <input type="tex" class="form-control" placeholder="Masukkan Kode Peminjaman">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Peminjam/Id</label>
                    <input type="tex" class="form-control" placeholder="Masukan Nama Peminjaman/Id">
                  </div>

                   <div class="form-group">
                    <label>Buku/Kode</label>
                    <input type="password" class="form-control"  placeholder="Masukkan Judul Buku/Kode">
                  </div>
                  
                   <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="tex" class="form-control"  value="<?php echo date('d M Y'); ?>" readonly >
                  </div>
                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </div>
                <!-- /.card-body -->

               
              </form>
            </div>
          </section>
        </div>