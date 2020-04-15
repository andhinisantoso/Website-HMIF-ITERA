<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php') ?>

<div class="main">
    <div class="hipsum">
      <div class="form-profile">
      	<form action="<?= base_url(); ?>admin_news/simpan_nambah" method="post" enctype="multipart/form-data">
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Judul</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="judul" >
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Deskripsi</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="deskripsi" >
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Tanggal</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="datepicker3" name="tanggal" >
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Waktu</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="timepicker" name="waktu" >
		      
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Tempat</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="tempat" >
		    </div>
		  </div>
		  
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Foto Kegiatan</label>
		    <div class="col-sm-10">
		      <input type="file" name="foto" id="input-file-now-custom-1" class="dropify">
		    </div>
		  </div>


		  <div class="form-group row">
		    <div class="col-sm-12">
		    	<br>
		      <button type="submit" class="btn btn-success float-right"><i class="fa fa-save">&nbsp</i>simpan</button>
		    </div>
		  </div>
		</form>

</div>

<?php $this->load->view('admin/footer.php')  ?>