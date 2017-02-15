<?php

$q = $_GET["q"];

include 'koneksi.php';

if ($q != "") {
    $sql1 = "select * from member where idmember = '" . $q . "'";
    $hasil = mysql_query($sql1);
    $data = mysql_fetch_array($hasil);
    $sql = "SELECT * FROM pelanggan WHERE idpelanggan = '" . $q . "'";
    $result = mysql_query($sql);


    echo "ID : " . $data['idmember'] . "<br/>";
    echo "Nama : " . $data['nama'];
    if (mysql_num_rows($result) > 0) {
        echo "<table border='1'>
<tr>
<th>Tanggal Laundry Masuk</th>
<th>Tanggal Laundry Keluar</th>
<th>Jenis</th>
<th>Berat Laundry</th>
<th>Harga Laundry</th>
<th>Status Laundry</th>
<th>pegawai penerima</th>
<th>pegawai Update</th>
</tr>";

        while ($row = mysql_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['masuk'] . "</td>";
            echo "<td>" . $row['keluar'] . "</td>";
            echo "<td>" . $row['jenis'] . "</td>";
            echo "<td>" . $row['berat'] . " kg"."</td>";
            echo "<td>" ."Rp ". $row['harga'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>". $row['peagawai']."</td>";
             echo "<td>". $row['update']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<br/> <b>Belum Ada Riwayat Laundry<b>";
    }
    echo "</table>";
} else {
    $sql = "SELECT * FROM member";

    $result = mysql_query($sql);


    echo "<table border='1'>
<tr>
<th>Id Member</th>
<th>Nama</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Tanggal Register</th>
<th>Pegawai</th>
</tr>";

    while ($row = mysql_fetch_array($result)) {

        echo "<tr>";
        echo "<td>" . $row['idmember'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['alamat'] . "</td>";
        echo "<td>" . $row['telp'] . "</td>";
        echo "<td>" . $row['register'] . "</td>";
        echo "<td>" . $row['pegawai'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>