<?php 
include '../crudManageUser/config.php';
$id_penerima = $_GET['id_penerima'];
mysqli_query($koneksi,"DELETE FROM datapenerima WHERE id_penerima='$id_penerima'")or die(mysqli_error($koneksi));
 
header("location:../tambahData/tambahData.php");
?>