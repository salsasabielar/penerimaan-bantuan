<?php 
include '../crudManageUser/config.php';
$id_bantuan = $_GET['id_bantuan'];
mysqli_query($koneksi,"DELETE FROM bantuan WHERE id_bantuan='$id_bantuan'")or die(mysqli_error($koneksi));
 
header("location:../crudBantuan/bantuan.php");
?>