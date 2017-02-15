<?php

session_start();
include "koneksi.php";


$iduser = $_POST['id_user'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];
//========================================
$lokasi_file = $_FILES['foto']['tmp_name'];
$tipe_file = $_FILES['foto']['type'];
$nama_file = $_FILES['foto']['name'];
$direktori = "image_user/$nama_file";

move_uploaded_file($lokasi_file, $direktori);
//========================================
if($iduser==null||$nama==null||$username==null||$pass==null||$jabatan==""){
    echo "<h1 align=\"center\">Inputan Tidak Valid</h1><br/><center><a href=\"admin.php?cat=pegawai\">ULANGI INPUTAN</a></center>";
}else {

$query = "insert into karyawan(id_user,nama,alamat,username,pass,jabatan,gaji,foto)value('$iduser','$nama','$alamat','$username','$pass','$jabatan','$gaji','$nama_file')";
$sql = mysql_query($query);
echo "<meta http-equiv=refresh content=0;url=admin.php?cat=pegawai>";
}
?>
