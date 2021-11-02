<?php
    if(isset($_GET['id_penerima'])){
        $id_penerima    =$_GET['id_penerima'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../crudManageUser/config.php";
    $query    =mysqli_query($koneksi, "SELECT * FROM datapenerima WHERE id_penerima='$id_penerima'");
    $data    =mysqli_fetch_array($query);
?>
<html>
<head>
    <title>Detail Data Penerima</title>
</head>
<body>
    <h2>Detail Data Penerima</h2>
    <p><i>Note: Dibawah ini adalah detail informasi data penerima</i> <b><?php echo $id_penerima?></b></p>
    <table border="0" cellpadding="4">
        <tr>
            <td size="90">NIK</td>
            <td>: <?php echo $data['nik']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $data['nama']?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>: <?php echo $data['ttl']?>, <?php echo $data['ttl']?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: <?php echo $data['pekerjaan']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $data['jenisKelamin']?></td>
        </tr>
        <tr>
            <td>Penerima merupakan calon penerima BST Kemensosatan</td>
            <td>: <?php echo $data['k1']?></td>
        </tr>
        <tr>
            <td>Kehilangan mata pencaharian</td>
            <td>: <?php echo $data['k2']?></td>
        </tr>
        <tr height="40">
            <td></td>
            <td>   <a href="../tambahData/tambahData.php">Kembali</a></td>
        </tr>
    </table>
</body>
</html>