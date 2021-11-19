<?php 
 
include '../crudManageUser/config.php';
$id_warga = $_POST['id_warga'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
$ceka=$_POST['ya'];
$jumlaha=count($ceka)*1;
echo $jumlaha;
if (mysqli_query($koneksi,"DELETE FROM kriteria_warga WHERE id_warga='$id_warga'")) {
    for($i=0; $i < $jumlaha; $i++){    
        if(mysqli_query ($koneksi, "INSERT INTO kriteria_warga (id_kriteria, id_warga) values ($ceka[$i], $id_warga)")) {               
        
        } else{
        echo mysqli_error($koneksi);
      }    
    
    }
    
     header("location:tambahData.php");
    
//     // if(mysqli_query ($koneksi, "INSERT INTO kriteria_warga (id_kriteria, id_warga) values ($ceka[$i], $id_warga)")) {
//     //     
//     // } else{
//     //  echo mysqli_error($koneksi);
//     // }            
    
// } else{
//     echo mysqli_error($koneksi);
}
 

?>