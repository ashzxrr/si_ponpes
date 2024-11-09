
<?php 
require_once ('functions.php');
$ses = $_SESSION['data_santri'];

$san = $conn->query("SELECT * from tb_santri where nis='$ses'");

$tampil = $san->fetch_assoc();
            $date = $tampil['tgl_lahir'];
            $newDate = date('d M Y', strtotime($date));
  
?>
<div class="container-fluid">

		
                    
	                        
	       


<!-- Nested Row within Card Body -->
<div class="row" >
<div class="col-lg-8 my-1 ">
            <!-- Basic Card Example -->
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Data Santri</h6>
                </div>
                <div class="card-body">

                <table >
                   	<tr>
                   		<th>NIS</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['nis']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Nama Lengkap</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['nama']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Jenis Kelamin</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['jenis_kelamin']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Tempat, Tanggal Lahir</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['tempat_lahir']; echo ","; echo $newDate; ?></td>
                   		
                   	</tr>
                   	<tr>
                   		<th>Alamat</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['alamat']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>No Telp</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['no_telp']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Email</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['email']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Pendidikan Terakhir</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['pendidikan_terakhir']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Orang Tua/Wali</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['orangtua']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Foto</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['foto']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Tahun Masuk</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['tahun_masuk']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Progam Studi</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['program_studi']; ?></td>
                   	</tr>
                   	<tr>
                   		<th>Sekolah</th>
                   		<th>:</th>
                   		<td><?php echo $tampil['sekolah']; ?></td>
                   	</tr>
					   <tr>
						<td></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<th>Ganti Foto</th>
						<th>:</th>
						<td> <a href="?page=santri&aksi=ganti&nis=<?php echo $tampil['nis']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                      <i class="fas fa-upload fa-sm text-white-50"></i> 
                                    >>
                                  </a>
						</td>
					</tr>
					</form>
                   </table>




                </div>
            </div>

        </div>

        <div class="col-lg-3">

                            <div class="card shadow mb-10 py-3 border-bottom-primary">
                                <div class="card-body">
                                    <table align="center" >	

                                    	<tr>
                                    		<td>
                                    			<img width="100" src="img/fotosantri/<?php echo $tampil['foto']; ?>" >
                                    		</td>
                                    	</tr>

                                    </table>
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