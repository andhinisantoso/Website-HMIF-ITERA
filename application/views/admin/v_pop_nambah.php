<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php') ?>

<div class="main">
    <div class="hipsum">
      <div class="form-profile">
      	<form action="<?= base_url(); ?>admin_profile/simpan_nambah" method="post">
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Nama Kepengurusan</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="nm_kepengurusan" >
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Periode</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="datepicker" name="periode" >
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