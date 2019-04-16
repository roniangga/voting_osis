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
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('asset/majes/');?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('asset/majes/');?>images/favicon.png" />
</head>

<body>
  <style type="text/css">
    body{
      background-image: url('<?php echo base_url('asset/img/bg6.jpg');?>');
    }
    .nis{
       outline: 1px dashed grey;
    }
  </style>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 nis">
              <h5>Selamat datang</h5>
              <h6 class="font-weight-light">Masukan NIS untuk login!.</h6>
               <?php echo $this->session->flashdata('message'); ?>
               <?php echo form_open('auth');?>
              <form class="pt-3" action="<?php site_url('auth');?>" method="post">
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg nis" id="nis1" name="nis1" placeholder="Masukan NIS">
                  <?php echo form_error('nis1', '<small class="text-danger">','</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg nis" id="nis2" name="nis2" placeholder="Ulangi NIS">
                  <?php echo form_error('nis2', '<small class="text-danger">','</small>'); ?>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=".<?php echo base_url('asset/majes/');?>vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src=".<?php echo base_url('asset/majes/');?>js/off-canvas.js"></script>
  <script src=".<?php echo base_url('asset/majes/');?>js/hoverable-collapse.js"></script>
  <script src=".<?php echo base_url('asset/majes/');?>js/template.js"></script>
  <!-- endinject -->
</body>

</html>
