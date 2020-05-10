<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php') ?>

<div class="main">
    <div class="hipsum">
      <div class="form-profile">
      	<form action="<?= base_url(); ?>admin_repository/simpan_nambah" method="post" enctype="multipart/form-data">
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Kategori</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="nama_folder" >
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Nama File</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="nama_file" >
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Link Shorten</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="link" >
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col-sm-12">
		    	<br>
		      <button type="submit" class="btn btn-success float-right"><i class="fa fa-save">&nbsp</i>simpan</button>
		      <a href="<?= base_url(); ?>admin_repository"><button type="button" class="btn btn-danger float-right"><i class="fa fa-trash">&nbsp</i>Cancel</button></a>
		    </div>
		  </div>
		</form>

</div>

<?php $this->load->view('admin/footer.php')  ?>