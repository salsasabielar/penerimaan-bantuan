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
  <link href="css/button.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="tambahDataWarga/tambahData.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Tambah Data Warga</span>
        </a>        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="crudKriteria/tambahKriteria.php">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Kriteria</span>
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
     
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 "></i>  
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manajemen User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Manajemen User</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><a href="form_tambahUSer.php" class="btn btn-sm btn-primary">Tambah User</a></h6>
                  <form action="manageUser.php" method="get">
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
                    <?php 
                      if(isset($_GET['pesan'])){
                        $pesan = $_GET['pesan'];
                        if($pesan == "input"){
                          echo "Data berhasil di input.";
                        }else if($pesan == "update"){
                          echo "Data berhasil di update.";
                        }else if($pesan == "hapus"){
                          echo "Data berhasil di hapus.";
                        }
                      }
                    ?>
                      <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Action</th>

                        <?php 
                          include "crudManageUser/config.php";
                          $query_mysqli = mysqli_query($koneksi,"SELECT * FROM user")or die(mysqli_error());
                          
                          if(isset($_GET['cari'])){
                              $cari = $_GET['cari'];
                              $query = mysqli_query($koneksi,"SELECT * FROM user WHERE username LIKE '%".$cari."%'"); 
                            }
                              else{
                                  $query = mysqli_query($koneksi,"SELECT * FROM user"); 
                              }
                          $nomor = 1;
                          if($query){
                          while($data = mysqli_fetch_array($query)){
                          ?> 
                            <tr>
                              <td><?php echo $nomor++; ?></td>
                              <td><?php echo $data['username']; ?></td>
                              <td><?php echo $data['password']; ?></td>
                              <td><?php echo $data['role']; ?></td>
                              <td>
                                <a class="btn btn-sm btn-primary" href="form_editUser.php?id_user=<?php echo $data['id_user']; ?>">Edit</a>
                                <a class="btn btn-sm btn-primary" href="crudManageUser/delete.php?id_user=<?php echo $data['id_user']; ?>">Hapus</a>					
                              </td>
                            </tr>
                            
                          <?php } }  ?>
                      </tr>
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