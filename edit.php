<?php
session_start();
include 'koneksi.php';
$user = $_SESSION["username"];
$id = $_GET['id'];
$query = "select * from karyawan where id_user = '$id'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
?> 
<form method="post" action="edit_user.php" enctype="multipart/form-data">
    <h2 align="center">EDIT</h2>
    <table align="center">
        <tr>
            <td>ID User</td>
            <td style="color: gray">:  <input type="text" name="id" value="<?php echo $data['id_user'] ?>"></td>
        </tr>
        <tr>
            <td>User Name</td>
            <td>: <input type="text" name="username" value="<?php echo $data['username'] ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: <input type="text" name="password" value="<?php echo $data['pass'] ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>: <input type="text" name="gaji" value="<?php echo $data['gaji'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <textarea name="alamat"><?php echo $data['alamat'] ?></textarea></td>
        </tr>
          <tr>
            <td>Jabatan</td>
            <td>: <select name="jabatan" spellcheck="<?php echo $data['jabatan'] ?>">
                    <option value="<?php echo $data['jabatan'] ?>"><?php echo $data['jabatan'] ?></option>
                    <option value="admin">Admin</option>
                    <option value="pegawai">Pegawai</option>
                </select></td>
        </tr>
        <tr>
            <td>Ganti Foto</td>
            <td>: <input type="file" name="foto"></td>
        </tr>
        <tr>
            <td></td>
            <td><img src="image_user/<?php echo $data['foto']; ?>" width="20%" height="20%">Foto Lama</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Simpan"> <input type="reset" name="Reset"></td>
        </tr>

    </table>

</form> 
