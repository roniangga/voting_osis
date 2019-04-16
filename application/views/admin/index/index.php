<style type="text/css">
  .box-index{
    height:505px;
    background-color: silver;
    background-color: #eeeeee;
    border: 1px solid #9D9C9C;
    margin-top: -30px; 
  }

  .back-title-index{
    border-bottom: 1px solid #9D9C9C;
    background-color: #e5effd; 
  }

  .title-index{
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .box-index-footer{
    height: 30px;
  }

  .box-keterangan{
    border-top: 1px solid #9D9C9C;
    height: 40px;
    margin-top: 63px;
  }

  .keterangan-isi{
    border-right: 1px solid #9D9C9C;
    height: 100%;
    padding-top: 7px;
  }
  .keterangan-isi2{
    height: 100%;
    padding-top: 7px;
  }

  .keterangan-isi2 small{
    font-size: 10px;
    font-weight: italic;
    color: red;
  }

</style>  
<!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12 box-index">
          <div class="row">
            <div class="col-sm-12 back-title-index">
              <h4 class="title-index">Hasil perolehan suara sementara</h4>
            </div>
          </div>
          <div class="row mt-3 diagram-row">
            <div class="col-sm-12">
              <canvas id="myChart" width="440" height="130"></canvas>
            </div>
          </div>
          <div class="row box-index-footer">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-4 text-center">
                  <small>Jumlah : <?php echo $hasil1['hasil_v'];?> Suara</small>
                </div>
                <div class="col-sm-4 text-center">
                  <small>Jumlah : <?php echo $hasil2['hasil_v'];?> Suara</small>
                </div>
                <div class="col-sm-4 text-center">
                  <small>Jumlah : <?php echo $hasil3['hasil_v'];?> Suara</small>
                </div>
              </div>
            </div>
          </div>
              <div class="row box-keterangan">
                    <div class="col-sm-3 keterangan-isi">
                    <small>Total User :</small>
                  </div>
                  <div class="col-sm-3 keterangan-isi">
                    <small>Belum memilih :</small>
                  </div>
                   <div class="col-sm-3 keterangan-isi">
                    <small>Sudah memilih :</small>
                  </div>
                   <div class="col-sm-3 keterangan-isi2">
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                  </div>
              </div>                    
        </div>
      </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- hasil -->
      <div class="hasil1" id="hasil1" data-isi="<?php echo $hasil1['hasil_v'];?>"></div>
      <div class="hasil2" id="hasil2" data-isi="<?php echo $hasil2['hasil_v'];?>"></div>
      <div class="hasil3" id="hasil3" data-isi="<?php echo $hasil3['hasil_v'];?>"></div>
      <!-- nama -->
      <div class="" id="nama1" data-isi="<?php echo $hasil1['nickname_kandidat'];?>"></div>
      <div class="" id="nama2" data-isi="<?php echo $hasil2['nickname_kandidat'];?>"></div>
      <div class="" id="nama3" data-isi="<?php echo $hasil3['nickname_kandidat'];?>"></div>
        
        
      