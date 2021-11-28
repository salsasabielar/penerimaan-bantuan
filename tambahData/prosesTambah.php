<?php
include "../crudManageUser/config.php";
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$hoby = $_POST['hoby'];

$submit  = $_POST['submit'];
if(mysqli_query ($koneksi, "INSERT INTO coba VALUES('','$nama','$tanggal','$hoby')")) {
    header("location:cobaLaporan.php");
  } else{
   echo mysqli_error($koneksi);
  }
// if (isset($_POST['submit'])) {
//     if(isset($_POST['radio']))
//     {
//         if($_POST['radio'] == 1)  {
                
//         }
//          else  if($_POST['radio'] == 2) {
//                 mysqli_query ($koneksi, "INSERT INTO datapenerima VALUES('','$nik','$nama','$ttl','$pekerjaan','$jenisKelamin','$k1','$k2','$k3','$k4','$k5','$k6','$k7','$k8','$k9','$k10','$k11','$k12','$k13','$k14','$k15','$k16',0,'$submit ')");
//        }
//     }
// } 

?>