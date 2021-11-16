<?php
include "../crudManageUser/config.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
$status = $_POST['status'];

$submit  = $_POST['submit'];
if(mysqli_query ($koneksi, "INSERT INTO warga VALUES('','$nik','$nama','$alamat','$ttl','$pekerjaan','$jenisKelamin','status')")) {
    header("location:kuisioner.php");
  } else{
   echo mysqli_error($koneksi);
  }


?>