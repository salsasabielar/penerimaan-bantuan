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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
            <a class="collapse-item" href="../tambahDataWarga_user/tambahData.php">Tambah Data</a>
            <a class="collapse-item" href="../hapus_user.php">Data Terhapus</a>
            <a class="collapse-item" href="../generateQrcode_user.php">Generate QR-Code</a>
          </div>
        </div>
      </li>
      <!-- <li class="nav-item">
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
      </li> -->
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Alasan Hapus</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Tambah Data</a></li>
              <li class="breadcrumb-item">Alasan Hapus</li>
            </ol>
          </div>

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
                        <th>Pilih Salah Satu Untuk Menghapus Data</th>
                        
                      </tr>
                    </thead>
                    <tr>
                      <th>
                      <form action="../prosesAlasan.php" method="post">
                          <!-- <input type="text" name="nik" value="<?php echo $_GET['nik'];?>" > -->
                          
                          <input type="radio" name="alasan" value="Tidak Layak"> Tidak Layak<br><br>
                          <input type="radio" name="alasan" value="Meninggal"> Meninggal<br><br>
                          <input type="radio" name="alasan" value="KPM Tidak Ditemukan"> KPM Tidak Ditemukan<br><br>
                          <input type="radio" name="alasan" value="Pindah Domisili"> Pindah domisili<br>
                          <div class="form-group">
                      <div class="custom-file">
                    </div>
                          <input type="submit" class="btn btn-primary" value="Submit">
                        </form>

                      </th>
                    </tr>
                    
                  </table>
                

                <?php
                //Mengecek apakah ada nilai dengan nama jenis_kelamin yang dikirim dari form
                if (isset($_POST['alasan'])) {

                    $alasan=$_POST['alasan'];
                    echo "<br>".$alasan;
                }
                ?>
                

                  
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

         

        </div>
        <!---Container Fluid-->
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
  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>

