<?php
@session_start();
include 'koneksi.php';
$username = $_SESSION['jabatan'];
if($username=="pegawai"||$username=="admin"){

?>

<html>
    <body>
        <h3 align="center">Tambah Pelanggan </h3>
        <form method="post" action="input_pelanggan.php">
            <table align="center">
                <tr>
                    <td>ID Pelanggan </td>
                    <td>: <input type="text" name="idpelanggan"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <textarea name="alamat"></textarea></td>
                </tr>
                <!--               Tambahin di database-->
                <tr>
                    <td>No. Telp</td> 
                    <td>: <input type="text" name="telp"</td>
                </tr>
                <!--               Tambahin di database-->
                <tr>
                    <td>Tanggal Register</td>
                    <td>: <input type="date" name="register"</td>
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
