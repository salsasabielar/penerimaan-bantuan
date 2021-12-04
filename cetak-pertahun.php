<?php 
include "crudManageUser/config.php" ;
?>
<body onLoad="javascript:print()"> 
<style type="text/css">
.style5 {font-size: 24px}
</style>

<div class="panel-heading">
    <table width="100%">
	<tr>
	<td><div align="center">
	<div align="center">Cetak Data Pertahun <hr> Tahun : <?php echo $_GET['thn_ini']; ?>
</div>
	</td>
	</tr>
</table>
</div>
<table width="100%" border="1" class="table table-bordered table-striped">

    <tr> 
    <th>No.</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tempat, Tanggal Lahir</th>
    <th>Pekerjaan</th>
    <th>Jenis Kelamin</th>
    <th>Tanggal Survey</th>
    <th>Status</th> 
    </tr>
<?php  
    include "crudManageUser/config.php";
        $thn_ini = date("Y");
        $query = mysqli_query($conn,
                            "SELECT * from warga LIKE '%$_GET[thn_ini]%'");
        $nomor=1;
        $total=0;
    while($r_tampil_transaksi=mysqli_fetch_array($query)) {
?>

    <tr>
    <td><?php echo $nomor; ?></td>
    <td><?php echo $$r_tampil_transaksi['nik']; ?></td>
    <td><?php echo $$r_tampil_transaksi['nama']; ?></td>
    <td><?php echo $$r_tampil_transaksi['alamat']; ?></td>
    <td><?php echo $$r_tampil_transaksi['ttl']; ?></td>
    <td><?php echo $$r_tampil_transaksi['pekerjaan']; ?></td>
    <td><?php echo $$r_tampil_transaksi['jenisKelamin']; ?></td>
    <td><?php echo $$r_tampil_transaksi['tanggalsurvey']; ?></td>
    <td><?php echo $$r_tampil_transaksi['status']; ?></td>
    </tr>

    <?php 
    $nomor++;
    }
    ?>
</table> 
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="FFFFFF">
<tr 
 <td width="63%" bgcolor="#FFFFFF">
 <p align ="right"></p><br/>
 </td>
 
 <td width="37%" bgcolor="#FFFFFF">
 <div align="right"> <?php $tanggal= date('d M Y');
 echo " $tanggal";?><br/>
 </td>
 </tr>
 </div>
 </table>