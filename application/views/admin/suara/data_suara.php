        <style type="text/css">
    .badge{
      margin-left: 5px;
      margin-top: 3px;
      width: 70px;
      padding: 5px;
    }
    .tombol{
      margin-right: 4px;
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
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Your analytics dashboard template.</p>
                  </div>
                </div>

                <div class="d-flex justify-content-between align-items-end flex-wrap">
                   <a href="<?php echo site_url('admin/reset_suara');?>" class="btn btn-danger btn-sm mt-2 mt-xl-0 tombol tombol-hapus"><i class="fas fa-undo fa-fw"></i> Reset</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Data User</p>
                  <div class="table-responsive">
                   <table class="table table-responsive" id="user" width="100%" cellspacing="0">
               <thead>
                 <tr>
                   <th>No</th>
                   <th>NIS</th>
                   <th>Kandidat yang di pilih</th>
                 </tr>
               </thead>
                <tbody>
                   <?php $i =1; foreach($suara as $key): ?>
                  <tr>
                  <td><?php echo $i++ ;?></td>
                  <td>********</td>
                  <td><?php echo $key->nickname_kandidat; ?></td>
                </tr>
                <?php endforeach;?>
                </tbody>
              
              </table>
              <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash');?>"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->




