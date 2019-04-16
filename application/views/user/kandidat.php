<style type="text/css">
	.kandidat{
		height: 500px;
		box-shadow: 0.1px 0.1px 2px black;
    margin-top: 15px;
	}
  img{
    margin-left: 50px;
  }
</style>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <p class="mb-md-0">Selamat datang di pemilihan ketua osis SMK N 1 Purbalingga</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <?php foreach($kandidat as $key):?>
            <div class="col-md-4 stretch-card">
              <div class="card kandidat">
                <div class="card-body justify-content-center">
                 <h2 class="text-center"> <button class="btn btn-primary btn-rounded btn-icon"><strong><?php echo $key['no_urut'];?></strong></button> <?php echo $key['nama_kandidat'];?></h2>
                 <img src="<?php echo base_url('asset/img/');?><?php echo $key['gambar'];?>" class="" width="66%" height="35%" ><br>
                 <div class="row mt-4">
                   <h5>Visi : <p><?php echo $key['visi'];?></p></h5>
                 </div>
                  <div class="row mt-4">
                   <h5>Misi : <p><?php echo $key['misi'];?></p></h5>
                 </div>
                 <div class="row mt-4 justify-content-center">
                 <?php echo form_open("vote/voting")?>
                    <input type="hidden" name="kandidat" value="<?php echo $key['no_urut'];?>">
                     <button type="submit" class="btn btn-primary"><i class="fas fa-vote-yea"></i> Pilih</button>
                
                 <?php echo form_close() ?>
                 </div>

                  </div>
                  </div>
                </div>
              <?php endforeach;?>


              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
       
        
        
      