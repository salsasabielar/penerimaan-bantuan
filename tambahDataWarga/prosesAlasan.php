<?php
include "../crudManageUser/config.php";
$nik = $_POST['nik'];
$alasan = $_POST['alasan'];

// $submit  = $_POST['submit'];
// if(mysqli_query ($koneksi, "UPDATE INTO data_terhapus VALUES('','$nik','$nama','$alamat','$ttl','$pekerjaan','$jenisKelamin','$status','$alasan')")) {
    if (mysqli_query($koneksi,"UPDATE data_terhapus SET alasan='$alasan' WHERE nik=$nik")) { 
    header("location:../hapus.php");
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