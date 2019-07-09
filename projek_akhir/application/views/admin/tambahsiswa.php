<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href=<?php echo base_url("assets/fontawesome-free/css/all.min.css"); ?> rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href=<?php echo base_url("assets/datatables/dataTables.bootstrap4.css");?> rel="stylesheet">

<!-- Custom styles for this template-->
<link href=<?php echo base_url("css/sb-admin-2.css"); ?> rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">       
        <div class="input-group-append">
        </div>
      </div>
    </form>
<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-circle fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#">Settings</a>
      <a class="dropdown-item" href="#">Activity Log</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href='login.php' data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
</ul>

</nav>

  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Data:</h6>
          <a class="dropdown-item" href="dataguru">Guru</a>
          <a class="dropdown-item" href="datasiswa">Siswa</a>
        </div>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Input Data:</h6>
          <a class="dropdown-item" href="#">Guru</a>
          <a class="dropdown-item" href="#">Siswa</a>
        </div>
        <li class="nav-item dropdown">
        <a class="nav-link" href="Mata_pelajaran">
            <i class="fas fa-fw fa-folder"></i>
              <span>Mata Pelajaran</span>
          </a>
        </li>        
        <li class="nav-item dropdown">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
              <span>Tabel Presensi</span>
          </a>
        </li>
      </li>
    </ul>

      <div id="content-wrapper">

      <div class="container-fluid">
      	<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Data Guru</a>
          </li>
        </ol>
        
       
<div class="container">
    <div class="form-group">
        <label for="txt_nisn">NISN</label>
        <input type="number" name="txt_nisn" class="form-control" id="txt_nisn">
    </div>
    <div class="form-group">
        <label for="txt_nama_siswa">NAMA SISWA</label>
        <Input type="text" name="txt_nama_siswa" id="txt_nama_siswa" rows="3">
    </div> 
    <div class="form-group">
    <label for="txt_jk">Jenis Kelamin</label>
        <select name="txt_jk" id="txt_jks" class="form-control" >
            <option value="">-- Pilih Status --</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="txt_kode_kelas">Kode Kelas</label>
        <input type="text" name='txt_kode_kelas' class="form-control" id="txt_kode_kelas">
    </div>
    <div class="form-group">
        <label for="txt_jenis_kelas">Jenis Kelas</label>
        <select name="txt_jenis_kelas" id="txt_jenis_kelas" class="form-control" >
            <option value="">-- Pilih jenis kelas --</option>
            <option value="ipa">IPA</option>
            <option value="ips">IPS</option>
        </select>
    </div>

     <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=<?php echo base_url("assets/jquery/jquery.min.js");?>></script>
  <script src=<?php echo base_url("assets/bootstrap/js/bootstrap.bundle.min.js");?>></script>

  <!-- Core plugin JavaScript-->
  <script src=<?php echo base_url("assets/jquery-easing/jquery.easing.min.js");?>></script>

  <!-- Page level plugin JavaScript-->
  <script src=<?php echo base_url("assets/chart.js/Chart.min.js");?>></script>
  <script src=<?php echo base_url("assets/datatables/jquery.dataTables.js");?>></script>
  <script src=<?php echo base_url("assets/datatables/dataTables.bootstrap4.js");?>></script>

  <!-- Custom scripts for all pages-->
  <script src=<?php echo base_url("js/sb-admin-2.min.js")?>></script>

  <!-- Demo scripts for this page-->
  <script src=<?php echo base_url("js/demo/datatables-demo.js");?>></script>
  <script src=<?php echo base_url("js/demo/chart-area-demo.js");?>></script>

	
</body>
</html> \