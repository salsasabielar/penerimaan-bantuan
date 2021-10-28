<?php 
 
include '../crudManageUser/config.php';
$id_penerima = $_POST['id_penerima'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl = date("Y-m-d");
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
$k1 = $_POST['k1'];
$k2 = $_POST['k2'];
$k3 = $_POST['k3'];
$k4 = $_POST['k4'];
$k5 = $_POST['k5'];
$k6 = $_POST['k6'];
$k7 = $_POST['k7'];
$k8 = $_POST['k8'];
$k9 = $_POST['k9'];
$k10 = $_POST['k10'];
$k11= $_POST['k11'];
$k12 = $_POST['k12'];
$k13= $_POST['k13'];
$k14= $_POST['k14'];
$k15= $_POST['k15'];
$k16= $_POST['k16'];
 
if (mysqli_query($koneksi,"UPDATE datapenerima SET nik='$nik', nama='$nama', ttl='$ttl',pekerjaan='$pekerjaan',jenisKelamin='$jenisKelamin',k1='$k1', k2='$k2',
k3='$k3',k4='$k4',k5='$k5',k6='$k6',k7='$k7',k8='$k8',k9='$k9',
k10='$k10',k11='$k11',k12='$k12',k13='$k13',k14='$k14',k15='$k15',k16='$k16' WHERE id_penerima='$id_penerima'")) {
            header("location:tambahData.php");
} else{
    echo mysqli_error($koneksi);
   }
 

?>