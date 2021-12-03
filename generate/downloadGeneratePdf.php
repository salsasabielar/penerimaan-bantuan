<?php
//library phpqrcode
include "phpqrcode/qrlib.php";
include 'koneksi.php';
 
//library mpdf
//Jika download plugin mpdf tanpa composer (versi lama)
define('_MPDF_PATH','mpdf/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');
 
//Jika download plugin mpdf dengan composer (versi baru)
//require_once __DIR__ . '/vendor/autoload.php';
//$mpdf = new \Mpdf\Mpdf();
 
//setting dan nama file pdf
$nama_dokumen='dewan-komputer-pdf';
 
ob_start();
?>
<html>
<head>
</head>
<body>
    <?php
        $no = 1;
        $query = "SELECT * FROM tbl_qr";
        $arsip1 = $db1->prepare($query);
        $arsip1->execute();
        $res1 = $arsip1->get_result();
        while ($row = $res1->fetch_assoc()) {
            $teks = $row['teks'];
            $namafile = $teks.".png";
    ?>
        <img src="temp/<?php echo $namafile; ?>" width="100px">
        <p><?php echo $teks; ?></p>
    <?php } ?>
</body>
</html>
<?php
mysqli_close($db1);
$html = ob_get_contents();
ob_end_clean();
 
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');