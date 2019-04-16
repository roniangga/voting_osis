<style type="text/css">
	.box-detail{
		height:440px;
		background-color: silver;
		background-color: #eeeeee;
		border: 1px solid #9D9C9C; 
	}

	.back-detail{
		border-bottom: 1px solid #9D9C9C;
		background-color: #e5effd; 
	}

	.detail-title{
		margin-top: 15px;
	}

	.img-thumbnail{
		margin-left: -10px;
	}

	.detail-nickname{
		font-weight: bold;
		font-size: 30px;
		height: 100px;
	}
</style>

<div class="main-panel">
        <div class="content-wrapper">
        	<div class="row">
        		<div class="col-sm-12 box-detail">
        			<div class="row">
        				<div class="col-sm-12 back-detail">
        					<h4 class="detail-title">Detail kandidat</h4>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-sm-6">
        					<img src="<?php echo base_url();?>asset/upload/<?php echo $kandidat['gambar'];?>" class="img-thumbnail">
        				</div>
        				<div class="col-sm-6">
        					<ul class="list-group">
							  <li class="list-group-item text-center detail-nickname"><?php echo $kandidat['nickname_kandidat'];?></li>
							  <li class="list-group-item">Nama Ketua : <strong><?php echo $kandidat['nama_ketua'];?></strong></li>
							  <li class="list-group-item">Nama Wakil : <strong><?php echo $kandidat['nama_wakil'];?></strong></li>
							  <li class="list-group-item">Visi : <strong><?php $isi = $kandidat['visi']; echo substr("$isi",0,45);?>...</strong><span class="badge badge-success" data-toggle="modal" data-target="#visi" style="cursor: pointer;">Selengkapnya</li>
							  <li class="list-group-item">Misi : <strong><?php $isi = $kandidat['misi']; echo substr("$isi",0,45);?>...</strong><span class="badge badge-primary" data-toggle="modal" data-target="#misi" style="cursor: pointer;">Selengkapnya</li>
							</ul>
        				</div>
        			</div>
        			<div class="row text-center mt-3">
        				<div class="col-sm-12">
        					<a href="<?php echo site_url('admin/kandidat');?>" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
        				</div>
        			</div>
        		</div>
        	</div>


</div>


<!-- Modal -->
<div class="modal fade" id="visi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Visi <?php echo $kandidat['nickname_kandidat'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo $kandidat['visi'];?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="misi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Misi <?php echo $kandidat['nickname_kandidat'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo $kandidat['misi'];?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>