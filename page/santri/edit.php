<?php
require_once ('functions.php');
    $nis = $_GET['nis'];

    $san = $conn->query("SELECT * from tb_santri where  nis=$nis ");

    $tampil = $san->fetch_assoc();


 ?>



<div class="container-fluid">

    <div class="card o-hidden border-0 shadow-lg my-1">
        <div class="card-body p-10">
            <!-- Nested Row within Card Body -->
            <div class="row">


                <div class="col-lg-12">
                    <div class="p-16">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Data</h1>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data" class="user">
                            <div class="form-group row">
                                <input type="hidden" name="nis" class="form-control form-control-user" id="exampleFirstName"
                                        value="<?php echo $tampil['nis']; ?>" autocomplete="off" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="mb-2">
                                    <p>Nama Lengkap</p>
                                </div>
                                    <input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName"
                                        value="<?php echo $tampil['nama']; ?>" autocomplete="off" >
                                </div>
                                <div class="col-sm-6">
                                <div class="mb-2">
                                    <p></p>
                                </div>
                                 
                                 <input type="hidden" name="jenis_kelamin" class="form-control form-control-user" id="exampleFirstName"
                                 value="<?php echo $tampil['jenis_kelamin']; ?>" autocomplete="off" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Tempat Lahir</p>
                                    </div>
                                    <input type="text" name="tempat_lahir" class="form-control form-control-user" id="exampleFirstName"
                                        value="<?php echo $tampil['tempat_lahir']; ?>" autocomplete="off" >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>Tanggal Lahir</p>
                                    </div>
                                    <input type="date" name="tgl_lahir" class="form-control form-control-user" id="exampleLastName" value="<?php echo $tampil['tgl_lahir']; ?>"
                                    autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Alamat</p>
                                    </div>
                                    <input type="text" name="alamat" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $tampil['alamat']; ?>" autocomplete="off" >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>No Telpon</p>
                                    </div>
                                    <input type="text" name="no_telp" class="form-control form-control-user" id="exampleLastName" value="<?php echo $tampil['no_telp']; ?>" autocomplete="off" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Email</p>
                                    </div>
                                    <input type="text" name="email" class="form-control form-control-user" id="exampleFirstName"
                                        value="<?php echo $tampil['email']; ?>" autocomplete="off" >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>Pendidikan Terakhir</p>
                                    </div>
                                    <input type="text" name="pendidikan_terakhir" class="form-control form-control-user" id="pendidikan_terakhir"
                                    value="<?php echo $tampil['pendidikan_terakhir']; ?>" list="list_pendidikan" autocomplete="off" >
                                    <datalist id="list_pendidikan">
                                        <option value="SD/Sederajat"></option>
                                        <option value="SMP/Sederajat"></option>
                                        <option value="SMA/Sederajat"></option>
                                    </datalist>
                                </div>   
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Orang Tua/Wali</p>
                                    </div>
                                    <input type="text" name="orangtua" class="form-control form-control-user" id="exampleFirstName"
                                        value="<?php echo $tampil['orangtua']; ?>" autocomplete="off" >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>Tahun Masuk</p>
                                    </div>
                                    <input type="text" name="tahun_masuk" class="form-control form-control-user" id="exampleFirstName"
                                        value="<?php echo $tampil['tahun_masuk']; ?>" autocomplete="off" readonly >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Studi</p>
                                    </div>
                                    <input type="text" name="program_studi" class="form-control form-control-user" id="exampleLastName"
                                    value="<?php echo $tampil['program_studi']; ?>" list="list_studi" autocomplete="off" >
                                    <datalist id="list_studi">
                                        <option value="At-Tahfidz"></option>
                                        <option value="Bahasa Arab"></option>
                                        <option value="Madin MMA"></option>
                                        <option value="Madrasah Qur'an"></option>
                                        <option value="Pengajian Kitab Salaf"></option>
                                    </datalist>
                                    
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>Pendidikan</p>
                                    </div>
                                    <input type="text" name="sekolah" class="form-control form-control-user" id="exampleFirstName"
                                       value="<?php echo $tampil['sekolah']; ?>" list="list_sekolah" autocomplete="off" >
                                    <datalist id="list_sekolah">
                                        <option value="SDI"></option>
                                        <option value="SMP BILINGUAL"></option>
                                        <option value="MMA/SMK"></option>
                                        <option value="-"></option>
                                    </datalist>
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    
                                </div>
                                <div class="col-sm-5">
                                    <div class="mb-6">
                                      <p>Simpan Perubahan</p>
                                    </div>
                                    <button type="submit" name="save" class="d-none d-sm-inline-block btn btn-info shadow-sm">
                                      <i class="fas fa-save fa-sm text-white-50"></i> 
                                    Simpan Perubahan
                                  </button>
                         
                                </div>
                            </div>
                           
                            <hr>
                        </form>
                    </div>
                </div>
              

            </div>
        </div>
    </div>
</div>

<?php
require_once ('functions.php');

$nis  = $_GET['nis'];
if (isset($_POST["save"])) {
         
    if( edit_santri($_POST) > 0 ){
        echo "
            <script>
            
            alert('Data Berhasil Di Edit');
            window.location.href= '?page=santri';

            </script>
        ";
    } else {
        echo "
            <script>
            
            alert('Data Gagal Di Edit');

        </script>
        ";
    }
}


?>