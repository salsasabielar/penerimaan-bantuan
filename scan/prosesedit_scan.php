<?php 
 
include '../crudManageUser/config.php';
$id_penerimaan = $_POST['id_penerimaan'];
$tanggalpenerimaan = $_POST['tanggalpenerimaan'];

// mysqli_query($koneksi,"UPDATE penerimaan SET tanggalpenerimaan='$tanggalpenerimaan' WHERE id_penerimaan='$id_penerimaan'");
        if(mysqli_query($koneksi,"UPDATE penerimaan SET tanggalpenerimaan='$tanggalpenerimaan' WHERE id_penerimaan='$id_penerimaan'")){
           header("location:validasiPenerima");
        }

?>