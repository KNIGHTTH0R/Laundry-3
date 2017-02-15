<?php

$q = $_GET["q"];

include 'koneksi.php';

    $sql1 = "select * from karyawan where jabatan ='" . $q . "' ";
    $hasil = mysql_query($sql1);

    echo "<table border='1'>
<tr>
<th>ID User</th>
<th>Nama</th>
<th>Username</th>
<th>Alamat</th>
<th>Jabatan</th>
<th>Gaji</th>

</tr>";

    while ($row = mysql_fetch_array($hasil)) {
        echo "<tr>";
        echo "<td>" . $row['id_user'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['alamat'] . "</td>";
        echo "<td>" . $row['jabatan'] . "</td>";
        echo "<td>" . $row['gaji'] . "</td>";
             ?>
<td> <a href="edit.php?id= <?php echo $row['id_user']?>">Edit</a> | <a href="hapus.php?id= <?php echo $row['id_user']?>" >Hapus</a></td>
<?php
        echo "</tr>";
    }

    echo "</table>";
