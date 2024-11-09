<?php 

$conn = mysqli_connect("localhost", "root", "", "ponpes");

$get = $_GET['nis'];
$query =$conn->query(" SELECT tb_santri.nis, tb_santri.nama, tbbiaya.kd_biaya, tbbiaya.namaBiaya, tbbiaya.jumlahBiaya, tbbiaya.ket from tb_santri join tbkeuangan on tb_santri.nis = tbkeuangan.nis join tbbiaya on tbkeuangan.kd_keuangan = tbbiaya.kd_keuangan where tb_santri.nis = $get");
$tampil = $query->fetch_assoc();
$nama = $tampil['nama'];
$niss = $tampil['nis'];

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-keuangan-$nama-$niss.xls"); 
?>
<h2>Laporan Data Keuangan Santri </h2>
<h3> Nama : <?php echo $tampil['nama'] ?> </h3>
<h3> NIS : <?php echo $tampil['nis'] ?> </h3>

<table border="1" >
<tr>
    <th>No.</th>
    <th>KD Biaya</th>
    <th>Nama Biaya</th>
    <th>Jumlah</th>
    <th>Ket</th>
</tr>

            <?php $no=1; ?>
            <?php foreach ($query as $row ) : ?>
                                
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['kd_biaya']; ?></td>
            
            <td><?php echo $row['namaBiaya']; ?></td>
            <td><?php echo $row['jumlahBiaya']; ?></td>
            <td><?php echo $row['ket']; ?></td>
        </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
</table>