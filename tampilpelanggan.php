<?php

@session_start();
include 'koneksi.php';
$username = $_SESSION['jabatan'];
if($username=="admin"||$username=="pegawai"){

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
        <div>
            <form >
                <table>
                    <tr>
                        <td>Id Pelanggan</td>
                        <td>:</td>
                        <td><input type="text" name="idpegawai" onchange="showStudio(this.value)"/></td>
                    </tr>
                </table>
            </form>
             <br />
            
            <h3>Catatan Pelanggan :</h3>
<div id="txtHint"><b></b></div>
    </div>
</body>
</html>
<?php
}else {
    echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>