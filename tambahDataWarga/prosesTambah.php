<?php
include "../crudManageUser/config.php";
$id_warga = $_POST['id_warga'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
$tanggalsurvey = $_POST['tanggalsurvey'];
$status = $_POST['status'];

$submit  = $_POST['submit'];
if(mysqli_query ($koneksi, "INSERT INTO warga VALUES('','$nik','$nama','$alamat','$ttl','$pekerjaan','$jenisKelamin','$tanggalsurvey','status')")) {
    header("location:kuisioner.php");
  // if(mysqli_query ($koneksi, "INSERT INTO penerimaan VALUES('$id_warga')")) {
  } else{
   echo mysqli_error($koneksi);
  }


?>