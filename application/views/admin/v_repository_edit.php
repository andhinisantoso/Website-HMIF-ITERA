<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php') ?>

<div class="main">
    <div class="hipsum">
      <div class="form-profile">
      	<form action="<?= base_url(); ?>admin_repository/simpan_edit" method="post" enctype="multipart/form-data">
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Kategori</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="nama_folder" value="<?= $nama_folder; ?>">
		      <input type="text" name="id_rep" value="<?= $id_rep ?>" hidden>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Nama File</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="nama_file" value="<?= $nama_file; ?>">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Link</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="link" value="<?= $link; ?>">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col-sm-12">
		    	<br>
		      <button type="submit" class="btn btn-success float-right"><i class="fa fa-save">&nbsp</i>simpan</button>
		    </div>
		  </div>
		</form>

<?php $this->load->view('admin/footer.php')  ?>