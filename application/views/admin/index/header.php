<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $judul;?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('asset/majes/');?>vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('asset/majes/');?>vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url('asset/majes/');?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('asset/majes/');?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('asset/majes/');?>images/favicon.png" />
    
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- datatable -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script> -->
</head>
<body>
<style type="text/css">
  @media (max-width: 992px) {
  .profil-dropdown{
    margin-right: 40px;
  }
}
  .alert{
    margin-top: 16px;
  }
</style>



  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url('asset/majes/');?>images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('asset/majes/');?>images/logo.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <?php echo $this->session->flashdata('message');?>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right profil-dropdown"> 
         <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo base_url('asset/');?>img/user.png" alt="profile"/>
              <span class="nav-profile-name"><?php echo $user['nama'];?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" data-toggle="modal" data-target="#profil">
                <i class="fas fa-user text-primary"></i>
                Profil
              </a>
              <a class="dropdown-item tombol-logout" href="<?php echo site_url('auth/logout');?>">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <?php if($this->session->userdata('role_id')== 2) {?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin');?>">
              <i class="fas fa-chart-bar menu-icon"></i>
              <span class="menu-title">Perolehan suara</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-table menu-icon"></i>
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/kandidat');?>">Kandidat</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/user');?>">Data User</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/Suara');?>">Data Suara</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link tombol-logout" href="<?php echo site_url('auth/logout');?>">
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      
        <?php }else{ ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('user/kandidat');?>">
              <i class="fas fa-users menu-icon"></i>
              <span class="menu-title">Kandidat</span>
            </a>
          </li>
        <?php }?>
        </nav>
         



      <!-- Modal  profil-->
<div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profil saya</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          <li class="list-group-item">Nama : <strong><?php echo $user['nama'];?></strong></li>
          <li class="list-group-item">NIS : <strong><?php echo $user['nis'];?></strong></li>
          <li class="list-group-item">Kelas : <strong><?php echo $user['kelas'];?></strong></li>
          <li class="list-group-item">Jurusan : <strong><?php echo $user['jurusan'];?></strong></li>
          <li class="list-group-item">Tanggal Lahir : <strong><?php echo $user['tanggal_lahir'];?></strong></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
      </div>
    </div>
  </div>
</div>