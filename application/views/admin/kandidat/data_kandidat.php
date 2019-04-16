<style type="text/css">
  .box-data-kandidat{
    height: 500px;
    background-color: white;
    border: 1px solid #9D9C9C;
    padding-bottom: 20px;
  }

  .data-kandidat-title{
    border-bottom: 1px solid #9D9C9C;
    background-color: #e5effd;
    font-family: sans-serif;
    padding: 5px;
  }

  .kandidat-title-text{
    margin-top: 5px;
  }

</style>
 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12 box-data-kandidat">
                <div class="row data-kandidat-title">
                  <div class="col-sm-3">
                    <h4 class="kandidat-title-text">Data Kandidat</h4>
                    <div class="berhasil" id="berhasil" data-isi="<?php echo $this->session->flashdata('berhasil');?>"></div>
                  </div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-3">
                    <a href="<?php echo site_url('admin/tambah_kandidat');?>" class="btn btn-primary btn-sm float-right"><i class="fas fa-folder-plus"></i> Input Kandidat</a>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-sm-12">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No urut</th>
                          <th>Kandidat</th>
                          <th>Foto</th>
                          <th>Jumlah Suara</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($hasil as $key): ?>
                        <tr>
                         <td><?php echo $key['no_urut'];?></td>
                         <td><?php echo $key['nickname_kandidat'];?></td>
                         <td class="py-1"><img src=" <?php echo base_url('asset/upload/');?><?php echo $key['gambar'];?>"></td>
                          <td><?php echo $key['hasil_v'];?></td>
                          <td>
                           <a href="<?php echo site_url('admin/detail_kandidat/').$key['id'];?>"><button type="button" class="btn btn-primary btn-rounded btn-icon"><i class="fas fa-eye"></i></button></a>
                           <a href="<?php echo site_url('admin/hapus_kandidat/').$key['id'];?>" class="tombol-hapus"><button type="button" class="btn btn-danger btn-rounded btn-icon"><i class="fas fa-trash"></i></button></a>
                           <a href="<?php echo site_url('admin/kanedit/').$key['id'];?>"><button type="button" class="btn btn-success btn-rounded btn-icon"><i class="fas fa-wrench"></i></button></a>   
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>

