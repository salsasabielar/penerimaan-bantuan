<?php
include "../crudManageUser/config.php";
$id_warga = $_POST['id_warga'];


                        $result = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM kriteria_warga WHERE id_warga = $id_warga");
                        $row = mysqli_fetch_array($result);
                        $count = $row['total'];
                        echo $count;
                          
                        if($count>=1 && $count <=5 ){$status='Tidak Layak';}
else if($count>=6 && $count <= 10){$status='Layak';}
else if($count >= 11 && $count <= 13){$status='Sangat Layak';}

echo $status;

	

?>