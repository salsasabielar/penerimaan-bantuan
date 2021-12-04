<?php 
include "../crudManageUser/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hasil Validasi Data Penerima</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="">
	<!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../scan/validasiPenerima">Validasi Data Penerima Bantuan</a>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Hasil Validasi Data Penerima</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">                                
                        <tr>
                            <td colspan="3">
                                <center>
                                <img src="" width="90px">
                                <h1>DESA BANTUREJO NGANTANG</h1>
                                <p>Jl. Raya Banturejo No.06 Telp. (0341) 5220053</p>
                                <hr>
                            </td>
                        </tr>
                    </table>
                    <?php
                    // If(isset($_POST['nik'])){

                    //     $nik = $_POST['nik'];
                        
                    //     }else{
                        
                    //     $nik = "Nik tidak diset di Method POST";
                        
                    //     }
                    // Echo $nik;
                    $sql=mysqli_query($koneksi, "SELECT * FROM warga WHERE nik='$_POST[nik]'");
                    $d=mysqli_fetch_array($sql);

                    if(mysqli_num_rows($sql) < 1){
                        ?>
                        <div class="alert alert-danger">
                            <center>
                            <strong>Maaf, Data tidak ditemukan..!</strong><br>
                            <!-- <i>Silahkan menghubungi Perguruan Tinggi terkait untuk menanyakan masalah ini</i> -->
                            </center>
                        </div>
                        <?php
                    }else{
                    ?>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Pekerjaan</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Survey</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><?php echo $d['nik']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['ttl']; ?></td>
                            <td><?php echo $d['pekerjaan']; ?></td>
                            <td><?php echo $d['jenisKelamin']; ?></td>
                            <td><?php echo $d['tanggalsurvey']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            <td>
                            <a class="btn btn-sm btn-primary" href="form_editData.php?id_warga=<?php echo $d['id_warga']; ?>">Edit</a> 
                            </td>
                        </tr>
                    </table>
                    <?php } ?>
                </div>
                <div class="panel-footer">
                    <center><a class="btn btn-danger" href="../scan/validasiPenerima">Kembali</a></center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>