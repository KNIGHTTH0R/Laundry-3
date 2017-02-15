<?php
		@session_start();
	include "koneksi.php";

	echo"<center>";
	echo "<p style='color:white'>";
    echo "</p>";
    $id = $_SESSION["username"];
    $sql = mysql_query("select * from karyawan where username = '$id'");
    $data = mysql_fetch_array($sql, MYSQL_ASSOC);
 ?>
<div style="padding: 10px ;"><img src="image_user/<?php echo $data['foto'] ?>"width=30% height=80%><br/></div>
    <?php
    echo "Nama    : " . $data["nama"] . "<br/>";
    echo "Alamat  : " . $data["alamat"] . "<br/>";
    echo "Jabatan : " . $data["jabatan"] . "<br/>";
    echo "Gaji    : " . $data["gaji"];
    echo "</center>";
	?>  
