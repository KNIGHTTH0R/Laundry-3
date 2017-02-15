<?php

$q = $_GET["q"];

include 'koneksi.php';

$sql1 = "select bulan, sum(harga) as pemasukan from pelanggan where tahun ='" . $q . "' group by bulan ";
$hasil = mysql_query($sql1);
echo "<h2 align=\"center\">PEMASUKAN TAHUN " . $q . "</h2>";
echo "<table border='1' align=\"center\">
<tr>
<th>Bulan</th>
<th>Pemasukan</th>


</tr>";

while ($row = mysql_fetch_array($hasil)) {
    echo "<tr>";
    echo "<td>" . $row['bulan'] . "</td>";
    echo "<td>" . $row['pemasukan'] . "</td>";

    echo "</tr>";
}
