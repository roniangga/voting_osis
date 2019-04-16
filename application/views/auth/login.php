<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/mycss/login.css')?>">
      <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <title><?php echo $judul;?></title>
  </head>
  <body>
  <style type="text/css">
    body{
      background-image: url('<?php echo base_url('asset/img/bg6.jpg');?>');
      background-size: cover;
      padding-top: 150px;
    }
  </style>
  <div class="terima-kasih" id="terimakasih" data-isi="<?php echo $this->session->flashdata('terimakasih');?>"></div>
  <div class="warning" id="warning" data-isi="<?php echo $this->session->flashdata('message');?>"></div>
  <div class="container">
    <div class="row">
    <div class="col-10 col-sm-4 pesan">
  </div>
  </div>
  </div>
  <!-- alert -->
  <div class="col-10 col-sm-4 kotak-login mt-3">
    <div class="row text-center">
      <div class="col-sm-12 title-login">
        <h2 class="isi-title-login">Login Siswa</h2>
      </div>
    </div>
<form action="<?php site_url('auth');?>" method="post">
    <div class="row mt-4">
      <div class="col-sm-10 box-form">
        <div class="input-group box-form2">
            <div class="input-group-prepend">
              <div class="input-group-text" id=""><i class="fas fa-user-lock fa-fw"></i></div>
            </div>
            <input type="password" name="nis1" class="form-control" placeholder="Masukan NIS" aria-label="Masukan NIS" aria-describedby="btnGroupAddon">
          </div>
          <?php echo form_error('nis1', '<small class="text-danger">','</small>'); ?>
        </div>
      </div>
      <div class="row mt-3">
      <div class="col-sm-10 box-form">
        <div class="input-group box-form2">
            <div class="input-group-prepend">
              <div class="input-group-text" id=""><i class="fas fa-user-shield fa-fw"></i></div>
            </div>
            <input type="password" name="nis2" class="form-control" placeholder="Ulangi NIS" aria-label="Ulangi NIS" aria-describedby="btnGroupAddon">
          </div>
          <?php echo form_error('nis1', '<small class="text-danger">','</small>'); ?>
        </div>
      </div>
      <div class="row mt-3 text-center">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-key fa-fw"></i> Login</button>
        </div>
      </div>

  </form>

    </div>
    </div>  
  </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <!-- swet -->
  <script src="<?php echo base_url();?>asset/sweet/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/sweet/dist/sweetalert.css">
  <script type="text/javascript">
    var terimaKasih = $('#terimakasih').attr('data-isi');

    if(terimaKasih) {
    swal({
      title:"",
       text:"Terimakasih " + terimaKasih, 
       type:"success"
    });
  }
    </script>
    <script type="text/javascript">
      var warning = $('#warning').attr('data-isi');

        if(warning) {
        swal({
          title:"Failed",
           text:"" + warning, 
           type:"error"
        });
      }
    </script>
  </body>
</html>

