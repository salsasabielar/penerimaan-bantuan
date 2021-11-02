<?php 
 
include '../crudManageUser/config.php';
$id_kriteria = $_POST['id_kriteria'];
$nama = $_POST['nama'];
 
if (mysqli_query($koneksi,"UPDATE kriteria SET  nama='$nama' WHERE id_kriteria='$id_kriteria'")) {
            header("location:tambahKriteria.php");
} else{
    echo mysqli_error($koneksi);
   }
 

?>