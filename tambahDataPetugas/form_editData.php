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
      <li class="nav-item">
        <a class="nav-link collapsed" href="tambahData.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Tambah Data</span>
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
                <img class="img-profile rounded-circle" src="../img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 "></i>
                  <a href="../logout.php">Logout</a>
                  <!-- Logout -->
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item">Tambah Data</li>
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
                $id_penerima = $_GET['id_penerima'];
                $query_mysqli = mysqli_query($koneksi,"SELECT * FROM datapenerima WHERE id_penerima='$id_penerima'")or die(mysqli_error($koneksi));
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysqli)){
                ?>
                <form action="../tambahData/updateData.php" method="post">
                    <div class="form-group">
                      <label for="username">NIK</label>
                      <input type="hidden" name="id_penerima" value="<?php echo $data['id_penerima'] ?>">
					            <input type="text" name="nik" value="<?php echo $data['nik'] ?>">                      
                    </div>
                    <div class="form-group">
                      <label for="password">Nama</label>
                      <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                      <label for="role">Tempat, Tanggal Lahir</label>
                      <input type="text" name="ttl" value="<?php echo $data['ttl'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Pekerjaan</label>
                      <input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Jenis Kelamin</label>
                      <input type="text" name="jenisKelamin" value="<?php echo $data['jenisKelamin'] ?>">
                    </div>
                    <h5><b>Kondisi Calon Penerima Bantuan</b></h5>
                    <div class="form-group">
                      <label>Penerima merupakan calon penerima BST Kemensos</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="k1" class="custom-control-input" value="Ya"<?php echo ($data['k1']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio1">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="k1" class="custom-control-input" value="Tidak"<?php echo ($data['k1']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio2">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Kehilangan mata pencaharian</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="k2" class="custom-control-input" value="Ya"<?php echo ($data['k2']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio3">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="k2" class="custom-control-input" value="Tidak"<?php echo ($data['k2']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio4">Tidak</label>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label>Anggota keluarga yang rentan sakit menahun, COVID-19, dan isolasi mandiri</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio5" name="k3" class="custom-control-input" value="Ya"<?php echo ($data['k3']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio5">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio6" name="k3" class="custom-control-input" value="Tidak"<?php echo ($data['k3']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio6">Tidak</label>
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label>Sumber penghasilan kurang dari Rp 750.000,-/bulan</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio7" name="k4" class="custom-control-input" value="Ya"<?php echo ($data['k4']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio7">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio8" name="k4" class="custom-control-input" value="Tidak"<?php echo ($data['k4']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio8">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Tutup usaha</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio9" name="k5" class="custom-control-input" value="Ya"<?php echo ($data['k5']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio9">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio10" name="k5" class="custom-control-input" value="Tidak"<?php echo ($data['k5']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio10">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Pendapatan berkurang akibat pandemi COVID-19</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio11" name="k6" class="custom-control-input" value="Ya"<?php echo ($data['k6']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio11">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio12" name="k6" class="custom-control-input" value="Tidak"<?php echo ($data['k6']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio12">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Tidak mampu berobat ke pelayanan kesehatan karena tidak memiliki uang dan jaminan kesehatan</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio13" name="k7" class="custom-control-input" value="Ya"<?php echo ($data['k7']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio13">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio14" name="k7" class="custom-control-input" value="Tidak"><?php echo ($data['k7']=='Tidak')?'checked':' ' ?>
                        <label class="custom-control-label" for="customRadio14">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Tidak memiliki tabungan/barang yang mudah dijual/digadaiakan dengan nilai gadai minimal Rp 1.000.000,-</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio15" name="k8" class="custom-control-input" value="Ya"<?php echo ($data['k8']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio15">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio16" name="k8" class="custom-control-input" value="Tidak"<?php echo ($data['k8']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio16">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Di dalam 1 rumah dihuni lebih dari 1 Kepala Keluarga</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio17" name="k9" class="custom-control-input" value="Ya"<?php echo ($data['k9']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio17">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio18" name="k9" class="custom-control-input" value="Tidak"<?php echo ($data['k9']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio18">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Keluarga cerai(ibu-ibu kepala keluarga) yang tidak memiliki harta warisan</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio19" name="k10" class="custom-control-input" value="Ya"<?php echo ($data['k10']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio19">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio20" name="k10" class="custom-control-input" value="Tidak"<?php echo ($data['k10']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio20">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Tidak memiliki keluarga lain yang dapat membantu</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio21" name="k11" class="custom-control-input" value="Ya"<?php echo ($data['k11']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio21">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio22" name="k11" class="custom-control-input" value="Tidak"<?php echo ($data['k11']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio22">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Memiliki keluarga yang disabilitas</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio23" name="k12" class="custom-control-input" value="Ya"<?php echo ($data['k12']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio23">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio24" name="k12" class="custom-control-input" value="Tidak"<?php echo ($data['k12']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio24">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Rumah dengan dinding kayu/bambu murah/tembok tanpa plester</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio25" name="k13" class="custom-control-input" value="Ya"<?php echo ($data['k13']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio25">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio26" name="k13" class="custom-control-input" value="Tidak"<?php echo ($data['k13']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio26">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Makan 1-2 kali/hari</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio27" name="k14" class="custom-control-input" value="Ya"<?php echo ($data['k14']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio27">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio28" name="k14" class="custom-control-input" value="Tidak"<?php echo ($data['k14']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio28">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Konsumsi daging/susu/ayam hanya 1 kali/minggu</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio29" name="k15" class="custom-control-input" value="Ya"<?php echo ($data['k15']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio29">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio30" name="k15" class="custom-control-input" value="Tidak"<?php echo ($data['k15']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio30">Tidak</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Lansia (di atas 60 tahun) terlantar</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio31" name="k16" class="custom-control-input" value="Ya"<?php echo ($data['k16']=='Ya')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio31">Ya </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio32" name="k16" class="custom-control-input" value="Tidak"<?php echo ($data['k16']=='Tidak')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio32">Tidak</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update & Simpan</button>
                  </form>
                  <?php } ?>
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