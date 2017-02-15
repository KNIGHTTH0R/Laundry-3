<?php

session_start();
include "koneksi.php";
$pegawai = $_SESSION['username'];
$idpelanggan = $_POST['idpelanggan'];
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];
$berat = $_POST['berat'];
$jenis = $_POST['jenis'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$query2 = "select * from berat_laundry where jenis = '$jenis'";
$sql2 = mysql_query($query2);
$data2 = mysql_fetch_array($sql2);
echo $data2['harga'];
$harga=$data2['harga'];
$total = $berat * $harga;
if ($total==null||$keluar==null||$masuk==null||$berat==null||$jenis==""||bulan==null||$tahun==null){
    echo "<h1 align=\"center\">Inputan Tidak Valid</h1><br/><center><a href=\"pegawai.php?cat=laundrimasuk\">ULANGI INPUTAN</a></center>";
}else {
$query = "insert into pelanggan(idpelanggan,masuk,keluar,berat,status,peagawai,harga,bulan,tahun,jenis)value('$idpelanggan','$masuk','$keluar','$berat','belum','$pegawai','$total','$bulan','$tahun','$jenis')";
$sql = mysql_query($query);
echo "<meta http-equiv=refresh content=0;url=pegawai.php>";
}
?>
