<center>    <?php
    @session_start();
    include "koneksi.php";
    echo "<p style='color:white'>";
    
    echo "</p>";
    $id = $_SESSION["username"];
    $sql = mysql_query("select * from karyawan where username = '$id'");
    $data = mysql_fetch_array($sql, MYSQL_ASSOC);
     ?>
    <img src="image_user/<?php echo $data['foto'] ?>"width="30%" height="30%"><br/>
    <?php
    echo "Nama    : " . $data["nama"] . "<br/>";
    echo "Alamat  : " . $data["alamat"] . "<br/>";
    echo "Jabatan : " . $data["jabatan"];
    ?>  
    </center>