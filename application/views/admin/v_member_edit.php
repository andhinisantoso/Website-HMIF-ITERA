<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php') ?>

<div class="main">
    <div class="hipsum">
      <div class="form-profile">
      	<form action="<?= base_url(); ?>admin_member/simpan_edit" method="post">
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">NIM</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="nim" readonly value="<?= $nim; ?>">
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
		    <div class="col-sm-12">
		    	<br>
		      <button type="submit" class="btn btn-success float-right"><i class="fa fa-save">&nbsp</i>simpan</button>
		    </div>
		  </div>
		</form>

</div>

<?php $this->load->view('admin/footer.php')  ?>