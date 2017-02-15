<?php

session_start();
include "koneksi.php";
$pegawai = $_SESSION['username'];
$idpelanggan = $_POST['idpelanggan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$register = $_POST['register'];
$telp = $_POST['telp'];

$query = "insert into member(idmember,nama,alamat,register,telp,pegawai)value('$idpelanggan','$nama','$alamat','$register','$telp','$pegawai')";
$sql = mysql_query($query);

echo "<meta http-equiv=refresh content=0;url=pegawai.php>";
?>