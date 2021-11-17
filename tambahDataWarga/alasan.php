<!DOCTYPE html>
<html>
<head>
    <title> Keterangan Hapus Data </title>
</head>
<body>
<form action="prosesAlasan.php" method="post">
	<input type="text" name="nik" value="<?php echo $_GET['nik'];?>" >
    Pilih Salah Satu Untuk Menghapus Data: <br>
    <input type="radio" name="alasan" value="Tidak Layak"> Tidak Layak<br>
    <input type="radio" name="alasan" value="Meninggal"> Meninggal<br>
    <input type="radio" name="alasan" value="KPM Tidak Ditemukan"> KPM Tidak Ditemukan<br>
    <input type="radio" name="alasan" value="Pindah Domisili"> Pindah domisili<br>
    <input type="submit" value="Submit">
</form>

<?php
//Mengecek apakah ada nilai dengan nama jenis_kelamin yang dikirim dari form
if (isset($_POST['alasan'])) {

    $alasan=$_POST['alasan'];
    echo "<br>".$alasan;
}
?>
</body>
</html>