<?php
@session_start();
$username = $_SESSION['jabatan'];
if ($username == "pegawai") {
    include "koneksi.php";

    $sql = mysql_query("select distinct idmember from member");
    ?>
    <html>
        <head>
        <body>
            <h3 align="center">Masukkan Data Laundry </h3>
            <form method="post" action="input_laundry.php"
                  ENCTYPE="MULTIPART/FORM DATA">
                <table align="center">
                    <tr>
                        <td>ID pelanggan </td>
                        <td>: <select name="idpelanggan">
                                <option value=""></option>
                                <?php while ($data = mysql_fetch_array($sql)) { ?>
                                    <option value="<?php echo $data ['idmember']; ?>"><?php echo $data["idmember"]; ?></option>
                                    <?php
                                }
                                ?>     
                            </select></td>
                    </tr>
                    <tr>
                        <td>Tanggal masuk</td>
                        <td>: <input type="date" name="masuk"></td>
                    </tr>
                    <tr>
                        <td>Tanggal keluar</td>
                        <td>: <input type="date" name="keluar"></td>
                    </tr>
                    <tr>
                        <td>Jenis Laundry</td>
                        <td>: <select name="jenis">
                                <option value=""></option>
                                <option value="biasa">biasa</option>
                                <option value="betcover">bedcover</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Berat Laundry</td>
                        <td>: <input type="text" name="berat"/></td>
                    </tr>

                    <tr>
                        <td>Bulan</td>
                        <td>: <input type="text" name="bulan"/></td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td>: <input type="text" name="tahun"/></td>
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
} else {
    echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>