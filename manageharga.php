<?php
@session_start();
include 'koneksi.php';
$username = $_SESSION['jabatan'];
if ($username == "admin") {
    ?>
    <html>
        <head>

        </head>
        <body>
            <h3 align="center">Ubah Harga</h3>
            <form method="get" action="manage_harga.php">
                <table align="center">
                    <tr>
                        <td>Jenis : </td>
                        <td><select name="jenis">
                                <option value=""></option>
                                <option value="biasa">biasa</option>
                                <option value="betcover">bedcover</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Harga : </td>
                        <td><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Simpan"></td>
                        <td><input type="reset" value="Reset"></td>
                    </tr>
                </table>
            </form>
            <h3 align="center">Harga Sekarang</h3>
            <?php
            include 'koneksi.php';
            $query3 = "select * from berat_laundry";
            $sql = mysql_query($query3);
            echo "<table align='center'>";
            while ($data = mysql_fetch_array($sql)) {
                ?>
                <table align="center">
                    <tr>
                        <td> - Jenis : </td>
                        <td><?php echo $data['jenis'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga : </td>
                        <td><?php echo $data['harga'] ?></td>
                    </tr>

                <?php } echo "</table>"; ?>

        </body>
    </html>
    <?php
} else {
    echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>