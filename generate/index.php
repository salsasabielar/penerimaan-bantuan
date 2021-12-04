<?php
//library phpqrcode
include "../phpqrcode/qrlib.php";
include '../crudManageUser/config.php';
 
//direktory tempat menyimpan hasil generate qrcode jika folder belum dibuat maka secara otomatis akan membuat terlebih dahulu
$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);
 
?>
<html>
<head>
</head>
<body>
    <div align="center" style="margin-top: 50px;">
 
    <a href="download-pdf.php"><p>Download PDF</p></a>
 
    <table border="1">
        <thead>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Pekerjaan</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Survey</th>
                        <th>Status</th>
                        <!-- <th>Action</th> -->
                         <th>QRCode</th>
        </thead>
        <tbody>
        <?php
            $no = 1;
            $query = "SELECT * FROM warga";
            $arsip1 = $koneksi->prepare($query);
            $arsip1->execute();
            $res1 = $arsip1->get_result();
            while ($row = $res1->fetch_assoc()) {
                $nik = $row['nik'];
                $nama = $row['nama'];
                $alamat = $row['alamat'];
                $ttl = $row['ttl'];
                $pekerjaan = $row['pekerjaan'];
                $jeniskelamin = $row['jenisKelamin'];
                $tanggalsurvey = $row['tanggalsurvey'];
                $status = $row['status'];
 
                //Isi dari QRCode Saat discan
                $isi_teks1 = $nik;
                $isi_teks2 = $nama;
                //Nama file yang akan disimpan pada folder temp 
                $namafile1 = $nama.".png";
                //Kualitas dari QRCode 
                $quality1 = 'H'; 
                //Ukuran besar QRCode
                $ukuran1 = 4; 
                $padding1 = 0; 
                QRCode::png($isi_teks1,$isi_teks2,$tempdir.$namafile1,$quality1,$ukuran1,$padding1);
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nik; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $ttl; ?></td>
                <td><?php echo $pekerjaan; ?></td>
                <td><?php echo $jeniskelamin; ?></td>
                <td><?php echo $tanggalsurvey; ?></td>
                <td><?php echo $status; ?></td>
                <td style="padding: 10px;"><img src="temp/<?php echo $namafile1; ?>" width="35px"></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
 
</body>
</html>
<?php mysqli_close($koneksi); ?>