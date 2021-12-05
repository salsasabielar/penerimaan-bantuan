<?php 
include "../crudManageUser/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../img/logo/logo-SIB.png" rel="icon">
  <title>Sistem Informasi Penerimaan Bantuan</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/ruang-admin.min.css" rel="stylesheet">
  
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon">
          <img src="../img/logo/SSIB.png">
        </div>        
      </a>
      <li class="nav-item active">
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">       
      </div>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>        
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Data Warga</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../tambahDataWarga/tambahData.php">Tambah Data</a>
            <a class="collapse-item" href="../hapus.php">Data Terhapus</a>
            <a class="collapse-item" href="../generateQrcode.php">Generate QR-Code</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../crudKriteria/tambahKriteria.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Kriteria</span>
        </a>        
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="../scan/validasiPenerima">
          <i class="fas fa-fw fa-columns"></i>
          <span>Scanner</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="../laporan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span>
        </a>        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../manageUser.php">
          <i class="fas fa-fw fa-palette"></i>
          <span>Manajemen User</span>
        </a>
      </li>
      <hr class="sidebar-divider">    
      <li class="nav-item"> 
        <a class="nav-link" href="../logout.php">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 "></i>  
          <span>Keluar</span>
        </a>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div> -->
          

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <!-- Simple Tables -->
              <div class="card">
                
                <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Hasil Validasi Data Penerima</th>
                        
                      </tr>
                    </thead>
                    <tr>
                      <th>
                      <div class="container">
                            <div class="row">
                                <div class="panel panel-success">
                                    <!-- <div class="panel-heading">
                                        <h3 class="panel-title">Hasil Validasi Data Penerima</h3>
                                    </div> -->
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
                      
                      </th>
                    </tr>
                    
                  </table>
                

                

                  
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->
          <!--Row-->
          
      </div>
      
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/ruang-admin.min.js"></script>
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>  
</body>

</html>