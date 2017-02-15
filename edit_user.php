<?php

$user = $_SESSION["username"];

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];


$query = "UPDATE karyawan SET nama= '$nama', username='$username',
pass='$password',alamat =  '$alamat',jabatan = '$jabatan', gaji = '$gaji' WHERE  id_user ='$id'";
$sql = mysql_query($query);
$lokasi_file = $_FILES['foto']['tmp_name'];
if (!empty($lokasi_file)) {

    $tipe_file = $_FILES['foto']['type'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = "image_user/$nama_file";

    move_uploaded_file($lokasi_file, $direktori);

    $query2 = "SELECT * FROM karyawan WHERE id_user ='$id'";
    $sql2 = mysql_query($query2);
    while ($data1 = mysql_fetch_array($sql2)) {
        $fotolama = $data1['foto'];
        $hapus = "image_user/$fotolama";
        @$hapusfoto = unlink($hapus);

        $query1 = "UPDATE  karyawan SET foto = '$nama_file' WHERE  id_user ='$id'";
        $sql1 = mysql_query($query1);
    }
}
echo "<meta http-equiv=refresh content=0;url=admin.php?cat=pegawai>";
?>
