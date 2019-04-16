<style type="text/css">
  .kandidat{
    height: 400px;
    box-shadow: 0.1px 0.1px 2px black;
  }
   .input{
      outline: 1px dashed blue;
  }
  .btn{
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
                    <p class="mb-md-0">Tambah User</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card ">
              <div class="card kandidat">
                <div class="card-body">
                 
                 <div class="row">
                   <div class="col-md-6">
                   <?php echo form_open('admin/tambah_aksi');?>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control input" name="nama" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NIS</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control input" name="nis" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kelas</label>
                          <div class="col-sm-9">
                            <select class="form-control input" id="exampleSelectGender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                   </div><!-- form kiri -->
                   <div class="col-md-6">
                    <div class="form-group row">
                          <label class="col-sm-3 col-form-label">jurusan</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control input" name="nis" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tanggal lahir</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control input" name="tanggal_lahir" />
                          </div>
                        </div>
                   </div>
                 </div><!-- form kanan -->
                 <div class="row justify-content-center">
                   <a  href="<?php echo site_url('admin/user');?>" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                   <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                   <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> Siman</button>
                 </div>
                 <?php echo form_close();?>

                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
       
        
        
      