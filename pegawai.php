<?php

@session_start();
include 'koneksi.php';
$username = $_SESSION['jabatan'];
if($username=="pegawai"){
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="gaya1.css">
    </head>
    <body id="background">
        <div align="center"><h1>Laundri Ceria</h1><p>JL.Kaliurang</p></div><hr/>
        <div style="margin-left: 900px "><b>MENU PEGAWAI</b></div>
        <div id="menu" align="center" style="padding-left: 50px">
            <ul id="top-navigation" style="text-align: center">
                <li style="display: inline"><a href="?cat=profil">Profil</a></li>
                <li style="display: inline"><a href="?cat=inputpel">Input Pelanggan</a></li>
                <li style="display: inline"><a href="?cat=laundrimasuk">Laundry Masuk</a></li>
                <li style="display: inline"><a href="?cat=status">Status Laundry</a></li>
                <li style="display: inline"><a href="?cat=tampilpel">Cek</a></li>                
                <li style="display: inline"><a href="logout.php">Logout</a></li>
            </ul>    	
        </div>
        <br/>
        <div id="scroll">
<?php
			if (($_GET["cat"] == "profil") or (!isset($_GET["cat"]))) {
				include "/isi/profilpegawai.php";
            } else if ($_GET["cat"] == "inputpel") {
                include "inputpelanggan.php";
            } else if ($_GET["cat"] == "laundrimasuk") {
                include "inputlaundry.php";
            } else if ($_GET["cat"] == "status") {
                include "editstatus.php";
            } else if ($_GET["cat"] == "tampilpel") {
                include "tampilpelanggan.php";
            } 
?>
        </div>
    </body>
</html>
<?php
}else {
    echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>