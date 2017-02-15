<?php
include "koneksi.php";
$username = $_POST["username"];
$password = $_POST["password"];
$query = "select * from karyawan where username='$username' and pass='$password'"
;
$tampil = mysql_query($query);
$jumlah = mysql_num_rows($tampil);

if ($jumlah > 0) {
    $data = mysql_fetch_array($tampil);
    if ($data ["jabatan"] == "admin") {
        session_start();
        $_SESSION ["username"] = $data ["username"];
        $_SESSION["jabatan"] = "admin";
        echo "<meta http-equiv=refresh content=0;url=admin.php?>";
    } else if ($data ["jabatan"] == "pegawai") {
        session_start();
        $_SESSION ["username"] = $data ["username"];
        $_SESSION["jabatan"] = "pegawai";
        echo "<meta http-equiv=refresh content=0;url=pegawai.php?>";
    } 
} else {
    echo"Error";
}
?>