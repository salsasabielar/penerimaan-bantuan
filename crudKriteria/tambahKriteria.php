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
        <a class="nav-link" href="tambahKriteria.php">
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../laporan.php">Data Penerima</a>
            <a class="collapse-item" href="../scan/penerimaan.php">Data Penerimaan</a>
          </div>
        </div>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kriteria</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="tambahKriteria.php">Home</a></li>
              <li class="breadcrumb-item">Tambah Kriteria</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><a href="form_tambahKriteria.php" class="btn btn-sm btn-primary">Tambah Baru</a></h6>
                  <form action="../crudKriteria/tambahKriteria.php" method="get">
                      <input type="text" name="cari">
                      <input type="submit" value="Cari">
                  </form>
                  <?php 
                        if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                            echo "<b>Hasil pencarian : ".$cari."</b>";
                        }
                    ?>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Action</th>
                      </tr>
                      <?php 
                          include "../crudManageUser/config.php";
                          $query_mysqli = mysqli_query($koneksi,"SELECT * FROM kriteria")or die(mysqli_error());
                          
                          if(isset($_GET['cari'])){
                              $cari = $_GET['cari'];
                              $query = mysqli_query($koneksi,"SELECT * FROM kriteria WHERE nama LIKE '%".$cari."%' OR nik LIKE '%".$cari."%'" ); 
                            }
                              else{
                                  $query = mysqli_query($koneksi,"SELECT * FROM kriteria"); 
                              }
                          $nomor = 1;
                          if($query){
                          while($data = mysqli_fetch_array($query)){
                          ?> 
                            <tr>
                              <td><?php echo $nomor++; ?></td>
                              <td><?php echo $data['nama']; ?></td>
                              <td>
                                <a class="btn btn-sm btn-primary" href="form_editKriteria.php?id_kriteria=<?php echo $data['id_kriteria']; ?>">Edit</a> 
                                <a class="btn btn-sm btn-primary" href="deleteKriteria.php?id_kriteria=<?php echo $data['id_kriteria']; ?>">Hapus</a>                                
                              </td>
                            </tr>
                            <?php } }?>
                      </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
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