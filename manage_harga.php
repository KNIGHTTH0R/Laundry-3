<?php
include 'koneksi.php';

$jenis= $_GET['jenis'];
$harga= $_GET['harga'];

$query = "update berat_laundry set harga = '$harga' where jenis = '$jenis'";
$sql = mysql_query($query);
echo "<meta http-equiv=refresh content=0;url=admin.php>";
?>
