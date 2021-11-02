<?php 
 
include '../crudManageUser/config.php';
$id_warga = $_POST['id_warga'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
 
if (mysqli_query($koneksi,"UPDATE warga SET nik='$nik', nama='$nama',alamat='$alamat', ttl='$ttl',pekerjaan='$pekerjaan',jenisKelamin='$jenisKelamin' WHERE id_warga='$id_warga'")) {
            header("location:tambahData.php");
} else{
    echo mysqli_error($koneksi);
   }
 

?>