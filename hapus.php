<?php

include 'koneksi.php';

$id = $_GET['id'];
$query2 = "SELECT * FROM karyawan WHERE id_user='$id'";
$sql2 = mysql_query($query2);
while ($data1 = mysql_fetch_array($sql2)) {
    $fotolama = $data1['foto'];
    $hapus = "image_user/$fotolama";
    @$hapusfoto = unlink($hapus);
}
echo $id;

$query = "delete from karyawan where id_user = '$id'";
$sql = mysql_query($query);

echo "<meta http-equiv=refresh content=0;url=admin.php?cat=pegawai>";
?>
