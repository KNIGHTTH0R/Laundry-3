<?php

session_start();
include 'koneksi.php';
$pegawai = $_SESSION['username'];
$status = $_GET['status'];
$idpelanggan = $_GET['idpelanggan'];
$masuk = $_GET['masuk'];
if ($status == "sudah") {
    $sql1 = "select * from pelanggan where masuk = '$masuk' and idpelanggan = '$idpelanggan'";
    $parse = mysql_query($sql1);
    $data = mysql_fetch_array($parse);
    $sql = mysql_query("UPDATE  `pelanggan` SET  `status` =  '$status', `update` =  '$pegawai' WHERE  `idpelanggan` = '$idpelanggan' and `masuk`='$masuk'");
    
$sql2 = "select * from member where idmember = '$idpelanggan'";
$parse1 = mysql_query($sql2);
$data3 = mysql_fetch_array($parse1);

?>
<div align="center">
<h2>NOTA</h2>
<Table>
    <tr>
        <td>Nomor Nota</td>
        <td>:</td>
        <td><?php echo $data['nomer'];?></td>
    </tr>
    <tr>
        <td>ID Pelanggan</td>
        <td>:</td>
        <td><?php echo $data['idpelanggan'];?></td>
    </tr>
    <tr>
        <td>Nama Pelanggan</td>
        <td>:</td>
        <td><?php echo $data3['nama']?></td>
    </tr>
    <tr>
        <td>Jenis Laundry</td>
        <td>:</td>
        <td><?php echo $data['jenis']?></td>
    </tr>
    <tr>
        <td>Tanggal Masuk</td>
        <td>:</td>
        <td><?php echo $data['masuk'];?></td>
        <td>Dengan pegawai <?php echo $data['peagawai'];?></td>
    </tr>
    <tr>
        <td>Tanggal Keluar</td>
        <td>:</td>
        <td><?php echo $data['keluar'];?></td>
        <td>Dengan pegawai <?php echo $pegawai?></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><?php echo $data['harga']?></td>
    </tr>
</Table>
<a href="pegawai.php">CONTINUE</a>
</div>
<?php
} else {
    $sql4 = mysql_query("UPDATE  `pelanggan` SET  `status` =  '$status', `update` =  '$pegawai' WHERE  `idpelanggan` = '$idpelanggan' and `masuk`='$masuk'");
    echo "<meta http-equiv=refresh content=0;url=pegawai.php>";
}
?>