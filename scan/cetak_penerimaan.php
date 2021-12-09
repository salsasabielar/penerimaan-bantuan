<!DOCTYPE html>
<html>
<head>
	<title>Laporan Penerimaan BLTDD</title>
	<link rel="icon" href="../logo/logo.png">
	<style type="text/css">
		body{
			font-family: Arial;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<!-- <!DOCTYPE html>
<html>
<head>
 <title>Laporan Penerima Bantuan BLTDD Desa Banturejo</title>
</head>
<body> -->
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
				<center>
				<img src="../img/logo.png" width="200px">
				<h2>PEMERINTAH KABUPATEN MALANG</h2>
                <h2>KECAMATAN NGANTANG</h2>
                <h2>DESA BANTUREJO</h2>
				<p>Jl. Raya Banturejo No. 06 Telp. (0341) 5220053</p>
                <p>Kode Pos 65392</p>
            <h3> Laporan Penerimaan Bantuan Langsung Tunai Dana Desa <h3>
				</center>
 <tr> 
    <th>No.</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Pekerjaan</th>
    <th>Jenis Kelamin</th>
    <th>Tanggal Penerimaan</th> 
    </tr>
 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","bantuan");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"SELECT * FROM penerimaan INNER JOIN warga on penerimaan.id_warga=warga.id_warga");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id_penerimaan'] ?></td>
 <td><?php echo $d['nik']; ?></td>
 <td><?php echo $d['nama']; ?></td>
 <td><?php echo $d['alamat']; ?></td>
 <td><?php echo $d['pekerjaan']; ?></td>
 <td><?php echo $d['jenisKelamin']; ?> </td>
 <td><?php echo $d['tanggalpenerimaan']; ?> </td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>