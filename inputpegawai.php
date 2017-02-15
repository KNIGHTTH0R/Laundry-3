<?php
@session_start();
include 'koneksi.php';
$username = $_SESSION['jabatan'];
if($username=="admin"){
?>

<html>
    <head>
        <script type="text/javascript">
            function showStudio(str)
            {
                if (str=="")
                {
                    document.getElementById("txtHint").innerHTML="";
                    return;
                } 
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","getuser.php?q="+str,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        
        <h3 align="center">Tambah User</h3>
        <form method="post" action="input_pegawai.php" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>ID USER </td>
                    <td>: <input type="text" name="id_user"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>: <input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: <input type="password" name="pass"/></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <textarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>Jabatan</td> 
                    <td>: <select name="jabatan">
                            <option value=""></option>
                            <option value="admin">admin</option>
                            <option value="pegawai">pegawai</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>: <input type="text" name="gaji"/></td>
                </tr> 
                 <tr>
            <td>Foto</td>
            <td>: <input type="file" name="foto"></td>
        </tr>
                <tr>
                    <td><input type="submit" value="Simpan"><input type="reset" value="Hapus"></td>
                </tr>
            </table>
        </form>
        
        
        <h1 style="text-align: center">CEK USER</h1>
        
        <div style="text-align: center">
            <form >
                <table align="center">
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><select name="jabatan" onchange="showStudio(this.value)">
                                <option value="all"></option>
                                <option value="admin">Admin</option>
                                <option value="pegawai">Pegawai</option>
                            </select></td>
                    </tr>
                </table>
            </form>
             <br />
            
            <h3>USER</h3>
<div align="center" id="txtHint"><b></b></div>

    </div>
</body>
</html>
<?php
}else {
echo "<meta http-equiv=refresh content=0;url=index.php>";
    
}
?>
