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
                            <h2 class="h10 text-blue-900 mb-4" >Harap Upload Foto Berukuran 3x4 background biru</h2>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data" class="user">
                             <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="mb-2">
                                      <p>Edit Foto</p>
                                    </div>
                                    <input type="file" value="<?php echo $tampil['foto']; ?>" name="foto" id="foto" autocomplete="off" >
                                    <input type="hidden" value="<?php echo $tampil['nis']; ?>" name="nis" id="foto" autocomplete="off" >

                                </div>
                                <div class="col-sm-5">
                                    <div class="mb-6">
                                      <p></p>
                                    </div>
                                    <button type="submit" name="save" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded-full">
                                      <i class="fas fa-save"></i> 
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
         
    if(change_foto($_POST) > 0 ){
        echo "
            <script>
            
            alert('Foto Berhasil di Ganti');
            window.location.href= 'halaman_user.php';

            </script>
        ";
    } else {
        echo "
            <script>
            
            alert('Data Gagal Di Edit');
            window.location.href = '?page=santri&aksi=ganti&nis=$nis';

        </script>
        ";
    }
}


?>