<?php

@session_start();
include 'koneksi.php';
$username = $_SESSION['jabatan'];
if($username=="pegawai"){


include "koneksi.php";

$sql = mysql_query("select distinct idpelanggan from pelanggan");
?>
<html>
    <head>
    <body>
        <h3 align="center">Status Laundry </h3>
        <form method="get" action="edit_status.php"
              ENCTYPE="MULTIPART/FORM DATA">
            <table align="center">
                <tr>
                    <td>ID Pelanggan </td>
                    <td>: <select name="idpelanggan">
                            <option value=""></option>
                            <?php while ($data = mysql_fetch_array($sql)) { ?>
                                <option value="<?php echo $data ['idpelanggan']; ?>"><?php echo $data["idpelanggan"]; ?></option>
                                <?php
                            }
                            ?>     
                        </select></td>
                </tr>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td> : <select name="masuk">
                            <?php
                                $query1 = mysql_query("select distinct masuk from pelanggan");
                            ?>
                            <option value=""></option>
                            <?php while ($data1 = mysql_fetch_array($query1)) { ?>
                                <option value="<?php echo $data1 ['masuk']; ?>"><?php echo $data1["masuk"]; ?></option>
                                <?php
                            }
                            ?>     
                        </select></td>
                </tr> 
                <tr>
                    <td>Status</td>
                    <td> : <select name="status">
                            <option value="belum">belum</option>
                            <option value="sudah">sudah</option>
                        </select></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Simpan"><input type="reset" value="Hapus"></td>
                </tr>
            </table>
        </form>
    </body>
</head>
</html>
<?php
}else {
    echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>