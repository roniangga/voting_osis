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
                 <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash');?>"></div>


                <div class="d-flex justify-content-between align-items-end flex-wrap">
                 <a href="<?php echo site_url('admin/print');?>" class="btn btn-success btn-sm mt-2 mt-xl-0 tombol"><i class="fas fa-file-excel"></i> Excel</a>
                  <a href="<?php echo site_url('admin/pdf_user');?>" target="_blank" class="btn btn-danger btn-sm mt-2 mt-xl-0 tombol"><i class="fas fa-file-pdf"></i> PDF</a>
                   <a href="<?php echo site_url('admin/user_tambah');?>" class="btn btn-primary btn-sm mt-2 mt-xl-0 tombol"><i class="fas fa-folder-plus"></i> Tambah Data</a>
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
                   <th>Nama</th>
                   <th>Kelas</th>
                   <th>Jurusan</th>
                   <th>Tanggal Lahir</th>
                   <th>Status</th>
                   <th>Action</th>
                 </tr>
               </thead>
                <tbody>
                   <?php $i =1; foreach($siswa as $key): ?>
                  <tr>
                  <td><?php echo $i++ ;?></td>
                  <td><?php echo $key->nis; ?></td>
                  <td><?php echo $key->nama; ?></td>
                  <td><?php echo $key->kelas; ?></td>
                  <td><?php echo $key->jurusan; ?></td>
                  <td><?php echo $key->tanggal_lahir; ?></td>
                  <td>
                    <?php if ($key->status == 1) { ?>
                      <p>Sudah Memilih </p>
                    <?php } else {?>
                      <p>Belum Memilih</p>
                    <?php } ?>
                  </td>
                  <td>
                    <a href="<?php echo site_url('admin/hapus_user/');?><?= $key->id;?>" class="badge badge-danger badge-sm float-left tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                    <a href="<?= $key->id;?>" class="badge badge-primary badge-sm float-left"><i class="fas fa-edit"> Edit</i></a>
                  </td>
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




