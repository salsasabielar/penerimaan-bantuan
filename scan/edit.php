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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
            <a class="collapse-item" href="generateQrcode.php">Generate QR-Code</a>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="tambahData.php">Tambah Data</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <div class="card">
                
                <div class="card mb-4">
                
                <div class="card-body">
                <?php 
                include "../crudManageUser/config.php";
                $id_warga = $_GET['id_warga'];
                $query_mysqli = mysqli_query($koneksi,"SELECT * FROM warga WHERE id_warga='$id_warga'")or die(mysqli_error($koneksi));
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysqli)){
                ?>
                <form action="prosesedit.php" method="post">
                    <div class="form-group">
                      <label for="username">NIK</label>
                      <input type="hidden" name="id_warga" value="<?php echo $data['id_warga'] ?>">
					            <input type="text" class="form-control" name="nik" value="<?php echo $data['nik'] ?>">                      
                    </div>
                    <div class="form-group">
                      <label for="password">Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                    <label for="password">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Tempat, Tanggal Lahir</label>
                      <input type="date" class="form-control" name="ttl" value="<?php echo $data['ttl'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jenisKelamin" value="<?php echo $data['jenisKelamin'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Tanggal Survey</label>
                      <input type="date" class="form-control" name="tanggalsurvey" value="<?php echo $data['tanggalsurvey'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Tanggal Penerimaan</label>
                      <input type="date" class="form-control" name="tanggalpenerimaan" value="<?php echo $data['tanggalpenerimaan'] ?>">
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        
                      </div>
                    </div>
                    <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    
                      <tr>
                        <th>No.</th>
                        <th>Uraian Kriteria</th>
                        <th>Ya</th>
                        <th>Tidak</th>

                        <?php 
                        	$tampil ="SELECT * FROM kriteria";
                          $hasil=mysqli_query($koneksi,$tampil);  
                          $no1=0;
                          $no2=0;    
                          $nomor = 1;
                          while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                                
                                <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                  <input type=checkbox name=ya[] value=<?php echo $data['id_kriteria'] ;
                                    $query = "SELECT * FROM kriteria_warga WHERE id_warga='$id_warga'";
                                    $result = mysqli_query($koneksi, $query); 
                                    while ($row = mysqli_fetch_array($result)) {
                                      if($data['id_kriteria'] == $row['id_kriteria']){
                                        ?> checked=checked  <?php 
                                      }
        
                                    }     ?>
                                >

                              </td>                            
                                <td><input type=checkbox name=tidak[] value=$data[id_kriteria] id=id2$no2></td> </tr> <?php
                                $nomor++;
                                $no1++;
                                $no2++;
                                         
                         
                          }

								          ?>
                          <?php } ?>
                      </tr>
                    </thead>
                    <tbody>                                                                                                                                                                                                                               
                    </tbody>
                  </table>
                  <div class="form-group">
                      <div class="custom-file">
                        
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update & Simpan</button>
                  </form>
                  <?php  ?>
                </div>
              </div>
                
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-lg-6">
                            
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

</body>

</html>