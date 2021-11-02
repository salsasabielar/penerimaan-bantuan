<?php 
 
include '../crudManageUser/config.php';
$id_bantuan = $_POST['id_bantuan'];

$nama = $_POST['nama'];

 
if (mysqli_query($koneksi,"UPDATE bantuan SET nama='$nama'WHERE id_bantuan='$id_bantuan'")) {
            header("location:bantuan.php");
} else{
    echo mysqli_error($koneksi);
   }
 

?>