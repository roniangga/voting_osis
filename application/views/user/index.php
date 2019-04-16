<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/mycss/user.css');?>">

    <title><?php echo $judul;?></title>
  </head>
  <body>
  	<style type="text/css">
  		body{
  			background-color: #E9E8E8;
  		}
  	</style>
    <div class="tidakbisa" id="tidakbisa" data-isi="<?php echo $this->session->flashdata('tidakbisa');?>"></div>
    <div class="col-sm-12 nav-user">
    <div class="row">
    <img src="<?php echo base_url('asset/img/smkn.png');?>" class="img-fluid logo" alt="">
	    <div class="dropdown user-dropdown dropleft">
	     <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><small><?php echo $user['nama'];?></small> <img src="<?php echo base_url('asset/img/default.png');?>" class="img-fluid user-dropdown-img" alt="" ><i class="fas fa-angle-down fa-fw"></i></a>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    <a class="dropdown-item" data-toggle="modal" data-target="#profil"><i class="fas fa-user fa-fw"></i> Profil</a>
		    <a class="dropdown-item" href="<?php echo site_url('auth/logout');?>"><i class="fas fa-sign-out-alt fa-fw"></i> Logout</a>
		  </div>
	    </div>
	     <!-- <p class="title-welcome">Selamat datang di pemilihan ketua osis SMK Negeri 1 Purbalingga tahun pelajaran 2018/2019</p> -->
    </div>
    </div>
    <p class="title-welcome">Selamat datang di pemilihan ketua osis <span id="welcome"></span> </p>
    <div class="container">
    	 <div class="row">
            <?php foreach($kandidat as $key):?>
            <div class="col-md-4 stretch-card">
              <div class="card kandidat">
                <div class="card-body justify-content-center">
                 <h2 class="text-center title-kandidat"> <button class="btn btn-primary btn-rounded btn-icon"><strong><?php echo $key['no_urut'];?></strong></button> <?php echo $key['nickname_kandidat'];?></h2>
                 <img src="<?php echo base_url('asset/upload/');?><?php echo $key['gambar'];?>" class="img-thumbnail img-kandidat"><br>
                 <p>Nama Ketua : <strong><?php echo $key['nama_ketua'];?></strong></p>
                 <p>Nama Wakil : <strong><?php echo $key['nama_wakil'];?></strong></p>
                 <div class="row visi-text">
                   <h6>Visi :<br> <span class="content-visi-misi" style="cursor: pointer;"><?php $isi = $key['visi']; echo substr("$isi",0,27);?>...<span class="badge badge-success" data-toggle="modal" data-target="#misi" onclick="visi('<?php echo $key['nickname_kandidat'];?>')" >Selengkapnya</span></span></h6>
                 </div>
                  <div class="row misi-text">
                   <h6>Misi :<br> <span class="content-visi-misi" style="cursor: pointer;"><?php $isi = $key['misi']; echo substr("$isi",0,27);?>...<span class="badge badge-success" data-toggle="modal" data-target="#misi" onclick="visi()" data-id="<?= $key['visi'] ?>" data-misi="<?= $key['misi'] ?>">Selengkapnya</span></span></h6>
                 </div>
                 <div class="row mt-2 justify-content-center">
                 <?php echo form_open("vote/voting")?>
                    <input type="hidden" name="kandidat" value="<?php echo $key['no_urut'];?>">
                     <button type="submit" id="pilih" class="btn btn-primary pilih-button pilih"><i class="fas fa-vote-yea"></i> Pilih</button>
                
                 <?php echo form_close() ?>
                 </div>

                  </div>
                  </div>
                </div>
              <?php endforeach;?>


              </div>
    </div>




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

 <!-- Modal  visi misi-->
<div class="modal fade" id="misi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Visi Misi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
      </div>
    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <!-- swet -->
  <script src="<?php echo base_url();?>/asset/sweet/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/sweet/dist/sweetalert.css">
  <script src="<?php echo base_url();?>/asset/myjs/myscript.js" type="text/javascript"></script>

    <script type="text/javascript">
    	function visi(visi){
    		console.log(visi);
    	}
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
      <script type="text/javascript">
      var typed = new Typed('#welcome', {
            strings: ["SMK Negeri 1 Purbalingga tahun pelajaran 2018/2019"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
    </script>
    <script type="text/javascript">
  $(".pilih").on('click', function(e){
    e.preventDefault();

    var form = $(this).parents('form');

    swal({
      title: "Apakah anda yakin?",
      text: "Data akan di kirimkan",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-success",
      confirmButtonText: "Pilih",
      cancelButtonText: "cancel",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
        form.submit();
      } else {
        swal("Cancelled", "Data batal di kirimkan", "error");
      }
    });
  });
</script>

<script type="text/javascript">
   var tidakbisa = $('#tidakbisa').attr('data-isi');

    if(tidakbisa) {
    swal({
      title:"Tidak Bisa",
       text:tidakbisa, 
       type:"error"
    });
  }
</script>

  </body>
</html>

