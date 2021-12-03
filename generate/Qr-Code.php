<?php 
// Memanggil Libary
require 'phpqrcode/qrlib.php';

//Nama folder tempat menyimpan file QR CODE
$tempdir = "temp/"; 

//Jika folder tidak ada maka akan dibuat oleh PHP foldernya
if (!file_exists($tempdir)){ 
	mkdir($tempdir);
}
//isi qrcode jika di scan
$isiqrcode = $_POST['nik'];

//Membuat nama file QR CODE
$angka_acak     = rand(1,999);
$qrcode_filename = $angka_acak.'-'.$isiqrcode; 
$name_file= $qrcode_filename.".png";

//Quality QR CODE
$quality=QR_ECLEVEL_H;

// Ukuran QR CODE
$UkuranPixel=10;
$UkuranFrame=2;

QRcode::png($isiqrcode, $tempdir.$name_file, $quality, $UkuranPixel, $UkuranFrame); 
?>
<img src="<?php echo $tempdir.$name_file; ?>">