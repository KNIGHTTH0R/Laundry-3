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
                xmlhttp.open("GET","getpelanggan.php?q="+str,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        
        <h3 align="center">Tambah Pelanggan </h3>
        <form method="post" action="input_pelangganadmin.php">
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
                    <td>: <input type="text" name="telp"></td>
                </tr>
                <!--               Tambahin di database-->
                <tr>
                    <td>Tanggal Register</td>
                    <td>: <input type="date" name="register"/></td>
                </tr> 
                <tr>
                    <td><input type="submit" value="Simpan"><input type="reset" value="Hapus"></td>
                </tr>
            </table>
        </form>
        
        
        <h1 style="text-align: center">CEK PELANGGAN</h1>
        
        <div style="text-align: center">
            <form >
                <table align="center">
                    <tr>
                        <td>Id Pelanggan</td>
                        <td>:</td>
                        <td><input type="text" name="idpegawai" onchange="showStudio(this.value)"/></td>
                    </tr>
                </table>
            </form>
             <br />
            
            <h3>Catatan Pelanggan :</h3>
<div align="center" id="txtHint"><b></b></div>

    </div>
</body>
</html>
<?php
}else {
    echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>