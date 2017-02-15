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
                xmlhttp.open("GET","pemasukan.php?q="+str,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <div>
            <form >
                <table>
                    <tr>
                        <td>Tahun</td>
                        <td>:</td>
                        <td><select name="tahun" onchange="showStudio(this.value)">
                                <option value=""></option>
                                <?php
                                include 'koneksi.php';
                                $sql = mysql_query("select distinct tahun from pelanggan");
                                while ($data = mysql_fetch_array($sql)){
                                
                                ?>
                                <option value="<?php echo $data['tahun']?>"><?php echo $data['tahun']?></option>
                                <?php 
                                }
                                ?>
                            </select></td>
                    </tr>
                </table>
            </form>
             <br />
            
            <h3>LAPORAN :</h3>
<div id="txtHint"><b></b></div>
    </div>
</body>
</html>
<?php
}else {
    echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>