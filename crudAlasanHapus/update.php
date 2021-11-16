<?php 
 
include '../crudManageUser/config.php';
$id_alasan = $_POST['id_alasan'];
$nama = $_POST['nama'];
 
if (mysqli_query($koneksi,"UPDATE alasan SET  nama='$nama' WHERE id_alasan='$id_alasan'")) {
            header("location:alasan_hapus.php");
} else{
    echo mysqli_error($koneksi);
   }
 

?>