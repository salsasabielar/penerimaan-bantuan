<?php 
include '../crudManageUser/config.php';
$id_alasan = $_GET['id_alasan'];
mysqli_query($koneksi,"DELETE FROM alasan_hapus WHERE id_alasan='$id_alasan'")or die(mysqli_error($koneksi));
 
header("location:../crudAlasanHapus/alasanHapus.php");
?>