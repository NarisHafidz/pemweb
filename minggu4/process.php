<?php
   print_r($_POST);
   $nama = $_POST['nama'];
   $nim = $_POST['nim'];
   $ttl = $_POST['ttl'];
   $hobbykamu = $_POST['hobbykamu'];
   $alamatkamu = $_POST['alamatkamu'];
   $prodi = $_POST['prodi'];
   $minatstudi = $_POST['minatstudi'];
   $file = $_POST['file'];
   $sub = $_POST['sub'];
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Minggu 4</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
<center>
    <br><br><br><br>
    <form name="fmhs" method="POST" action="proses.php">
        <table border="10" cellspacing="5" cellpadding="100">
        <tr>
            <th colspan="2">FORM BIODATA KAMU</th>
        </tr>
            <tr>
                <td>Nama            :</td>
                <td><?php echo $nama;?> </td>
            </tr>
            <tr>
                <td>NIM             :</td>               
                <td><?php echo $nim;?> </td>
            </tr>
            <tr>
                <td>Tgl lahir       :</td>                
                <td><?php echo $ttl;?>  </td>
            </tr>
			<tr>
                <td>Hobby Kamu      :</td>              
                <td><?php echo $hobbykamu;?> </td>
            </tr>
			<tr>
                <td>Alamat Kamu     :</td>       
                <td><?php echo $alamatkamu;?> </td>
            </tr>
            <tr>
                <td>Program studi</td>    
                <td>
                    <?php echo $prodi;?> 
                </td>
            </tr>
            <tr>
                <td> Bidang minat   :</td> 
                <td><?php if(isset($_POST['sub']))  
                {   
                if (isset($_POST['minatstudi'])) {  
                echo $_POST['minatstudi']." <br/>";  
                }  
                    if (isset($_POST['minatstudi2'])) {  
                    echo $_POST['minatstudi2']." <br/>";  
                }  
                    if (isset($_POST['minatstudi3'])) {  
                         echo $_POST['minatstudi3']." <br/>";  
                } 
                }?>  
                </td>
            </tr>
            <tr>
                <td>Berkas CV       :</td>
                <td>
                <?php echo $file;?>
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>

</html>