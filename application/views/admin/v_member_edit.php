<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php') ?>

<div class="main">
    <div class="hipsum">
      <div class="form-profile">
      	<form action="<?= base_url(); ?>admin_member/simpan_edit" method="post">
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">NIM</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="nim" value="<?= $nim; ?>">
		      <input type="text" name="old_nim" hidden value="<?= $nim; ?>">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="nama" value="<?= $nama; ?>">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Tahun Masuk</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="th_masuk" value="<?= $th_masuk; ?>">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Tahun Keluar</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="th_lulus" value="<?= $th_lulus; ?>">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Judul Skripsi</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="jdl_skripsi" value="<?= $jdl_skripsi; ?>">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Link Skripsi</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="link" value="<?= $link; ?>">
		    </div>
		  </div>
		  
		  <div class="form-group row">
		    <div class="col-sm-12">
		    	<br>
		      <button type="submit" class="btn btn-success float-right"><i class="fa fa-save">&nbsp</i>simpan</button>
		      <a href="<?= base_url(); ?>admin_member"><button type="button" class="btn btn-danger float-right"><i class="fa fa-trash">&nbsp</i>Cancel</button></a>
		    </div>
		  </div>
		</form>

</div>

<?php $this->load->view('admin/footer.php')  ?>