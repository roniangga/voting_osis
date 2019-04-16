<style type="text/css">
	.box-tambah-kandidat{
		height: 540px;
		background-color: #eeeeee;
		border: 1px solid #9D9C9C;
		padding-bottom: 20px;
	}

	.input-kandidat-title{
		border-bottom: 1px solid #9D9C9C;
		background-color: #e5effd;
		font-family: sans-serif;
		padding: 5px;
	}

	.kandidat-title-isi{
		margin-top: 5px;
	}

</style>


<!-- partial -->
<div class="main-panel">
<div class="content-wrapper">

<div class="row">
	<div class="col-sm-12 box-tambah-kandidat">
		<div class="row input-kandidat-title">
			<div class="col-sm-3">
				<h4 class="kandidat-title-isi">Input Kandidat</h4>
			</div>
		</div>
		<!-- form -->
		<?php echo form_open_multipart('admin/tambah_kandidat');?>
		<div class="row mt-3">
			<div class="col-sm-6">
			 	<div class="form-group row">
              		<label class="col-sm-3 col-form-label">Nickname</label>
	              	<div class="col-sm-9">
	                <input type="text" class="form-control" placeholder="Nickname" name="nickname" value="<?php echo set_value('nickname');?>">
	                <small class="text-danger"><?php echo form_error('nickname');?></small>
	              	</div>
	            </div>
	            <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No urut</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="no_urut" value="<?php echo set_value('no_urut');?>">
                          <option selected="" value="" disabled="">pilih nomor urut</option>
                          <?php foreach($nomor as $key):?>
                          <option value="<?php echo $key;?>"><?php echo $key;?></option>
                      	  <?php endforeach;?>
                        </select>
                        <small class="text-danger"><?php echo form_error('no_urut');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input type="file" name="gambar" class="file-upload-default" value="<?php echo set_value('gambar');?>">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      <small class="text-danger"><?php echo form_error('gambar');?></small>
                    </div>
                </div>
                <div class="form-group row">
              		<label class="col-sm-3 col-form-label">Nama Ketua</label>
	              	<div class="col-sm-9">
	                <input type="text" class="form-control" placeholder="Nama ketua" name="nama_ketua" value="<?php echo set_value('nama_ketua');?>">
	                <small class="text-danger"><?php echo form_error('nama_ketua');?></small>
	              	</div>
	            </div>
	            <div class="form-group row">
              		<label class="col-sm-3 col-form-label">Nama wakil</label>
	              	<div class="col-sm-9">
	                <input type="text" class="form-control" placeholder="Nama wakil" name="nama_wakil" value="<?php echo set_value('nama_wakil');?>">
	                <small class="text-danger"><?php echo form_error('nama_wakil');?></small>
	              	</div>
	            </div> 	 	
            </div>
			<div class="col-sm-6">
				<div class="form-group row">
              		<label class="col-sm-3 col-form-label">Visi</label>
	              	<div class="col-sm-9">
	                <textarea  class="form-control" placeholder="visi" rows="8" name="visi" value="<?php echo set_value('visi');?>"></textarea>
	                <small class="text-danger"><?php echo form_error('visi');?></small>
	              	</div>
	            </div>
	            <div class="form-group row">
              		<label class="col-sm-3 col-form-label">Misi</label>
	              	<div class="col-sm-9">
	                <textarea  class="form-control" placeholder="misi" rows="8" name="misi" value="<?php echo set_value('misi');?>"></textarea>
	                <small class="text-danger"><?php echo form_error('misi');?></small>
	              	</div>
	            </div>
	            <div class="form-group row">
              		<label class="col-sm-3 col-form-label"></label>
	              	<div class="col-sm-9 text-center">
	              	<a href="<?php echo site_url('admin/kandidat');?>" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
	                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
	                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
	              	</div>
	            </div>
			</div>
		</div>
		</form>
	</div>
</div>



</div>

