<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo-SIB.png" rel="icon">
  <title>Sistem Informasi Penerimaan Bantuan</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="img/logo/SSIB.png">
        </div>        
      </a>
      <li class="nav-item active">
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">       
      </div>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
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
            <a class="collapse-item" href="tambahDataWarga/tambahData.php">Tambah Data</a>
            <a class="collapse-item" href="hapus.php">Data Terhapus</a>
            <a class="collapse-item" href="generateQrcode.php">Generate QR-Code</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="crudKriteria/tambahKriteria.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Kriteria</span>
        </a>        
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="scan/validasiPenerima">
          <i class="fas fa-fw fa-columns"></i>
          <span>Scanner</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="laporan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span>
        </a>        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manageUser.php">
          <i class="fas fa-fw fa-palette"></i>
          <span>Manajemen User</span>
        </a>
      </li>
      <hr class="sidebar-divider"> 
      <li class="nav-item"> 
        <a class="nav-link" href="logout.php">
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
            <h1 class="h3 mb-0 text-gray-800">Laporan </h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Laporan </li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <!-- Simple Tables -->
              <div class="card">
                
                <div class="table-responsive">
                <?php $thn_ini=date("Y");?>
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <form method="POST" action="">
                    <!-- <td>-Pilih Tahun- 
                     <select name="thn_ini">
                      <?php
                       $mulai= date('Y') - 50;
                       for($i = $mulai;$i<$mulai + 100;$i++){
                           $sel = $i == date('Y') ? ' selected="selected"' : '';
                           echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                       }
                       ?>
                       </select></td>  -->
                       
                     <!-- <td><button type="submit" name="cari" class="btn btn-danger">Cari</td> -->
                     <td><a class="btn btn-danger" href="cetak.php">Cetak</a></td>
                     <!-- <td><a href="cetak-pertahun.php?module=cetakpertahun&thn_ini=<?php echo $_POST['thn_ini']; ?>">Cetak</a></td> -->
                     <!-- <td><a target="_blank" href="cetak-pertahun-pdf.php?module=cetakpertahun&thn_ini=<?php echo $_POST['thn_ini'];?>"><img src="../img/pd.png" height="50px" height="50px"></a>&nbsp;&nbsp;</td>
                     <td><a target="_blank" href="cetak-pertahun-excel.php?module=cetakpertahun&thn_ini=<?php echo $_POST['thn_ini'];?>"><img src="../img/ex.png" height="50px" height="50px"></a>&nbsp;&nbsp;</td> -->
                     </tr>      
                                                                                
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
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
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php 
                          include "crudManageUser/config.php";
                          $query_mysqli = mysqli_query($koneksi,"SELECT * FROM warga")or die(mysqli_error());
                          
                          if (isset($_POST['cari'])){
                            $thn=$_POST['thn_ini'];
                            $query= mysqli_query($koneksi, "SELECT * from warga where tanggalsurvey LIKE '%$_POST[thn_ini]%'");
                            }else{
                          $query = mysqli_query($koneksi,"SELECT * from warga");
                          }
                          $nomor = 1;
                          if($query){
                          while($data = mysqli_fetch_array($query)){
                          ?> 
                          <!-- if (isset($_POST['cari'])){
                                              $thn=$_POST['thn_ini'];
                                              $query= mysqli_query($koneksi, "SELECT * from coba where tanggal LIKE '%$_POST[thn_ini]%'");
                                              }else{
                                            $query = mysqli_query($koneksi,"SELECT * from coba");
                                            }
                                            $nomor=1;
                                            $total=0;
                                            if($query){
                                              while($data = mysqli_fetch_array($query)){ -->
                            <tr>
                              <td><?php echo $nomor++; ?></td>
                              <td><?php echo $data['nik']; ?></td>
                              <td><?php echo $data['nama']; ?></td>
                              <td><?php echo $data['alamat']; ?></td>
                              <td><?php echo $data['ttl']; ?></td>
                              <td><?php echo $data['pekerjaan']; ?></td>
                              <td><?php echo $data['jenisKelamin']; ?></td>
                              <td><?php echo $data['tanggalsurvey']; ?></td>
                              <td><?php echo $data['status']; ?></td>
                              <td>
                              </td>
                            </tr>
                            <?php } }?>
                      
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

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>