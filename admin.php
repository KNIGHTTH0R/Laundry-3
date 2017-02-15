<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
@session_start();
include 'koneksi.php';
$jabatan = $_SESSION['jabatan'];
if($jabatan=="admin"){
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="gaya1.css">
    </head>
    <body id="background">
        <div align="center"><h1>Laundri Ceria</h1><p>JL.Kaliurang</p></div><hr/>
        <div style="margin-left: 900px "><b>MENU ADMIN</b></div>
        <div id="menu" align="center" style="padding-left: 90px">
            <ul id="top-navigation" style="text-align: center">
                <li style="display: inline"><a href="?cat=profil">Profil</a></li>
                <li style="display: inline"><a href="?cat=pegawai">Pegawai</a></li>
                <li style="display: inline"><a href="?cat=pelanggan">Pelanggan</a></li>
                <li style="display: inline"><a href="?cat=pemasukan">Pemasukan</a></li>
                <li style="display: inline"><a href="?cat=harga">Harga/Kg</a></li>
                <li style="display: inline"><a href="logout.php">Logout</a></li>
            </ul>    	
        </div>
        <br/>

        <div id="scroll">
            <?php
            if (($_GET["cat"] == "profil") or (!isset($_GET["cat"]))) {
                include "/isi/profiladmin.php";
            } else if ($_GET["cat"] == "pegawai") {
                include "inputpegawai.php";
            } else if ($_GET["cat"] == "pelanggan") {
                include "pelangganadmin.php";
            } else if ($_GET["cat"] == "pemasukan") {
                include "tampilpemasukan.php";
            } else if ($_GET["cat"] == "harga") {
                include 'manageharga.php';
            }
            ?>
        </div>
    </body>
</html>
<?php

}
else {
        echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>
