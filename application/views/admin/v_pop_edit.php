<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php')  ?>
    <!-- Content -->
    <div class="main">
      <div class="hipsum">
        
        <div class="jumbotron">
          <h1 id="profile-page">Edit <?= $nm_kepengurusan ?> <?= $periode ?>  <a class="anchorjs-link" href="#profile-page"><span class="anchorjs-icon"></span></a></h1>
          <p>Pada Profile Page, Administrator dapat mengubah data seperti photo banner, visi & misi, sejarah, logo dan badan kepengurusan Himpunan Mahasiswa Informatika ITERA
              Data yang dapat dimasukan oleh Administrator berupa gambar (JPG, JPEG dan PNG).
          </p>
        </div>
      
        

        <div class="form-profile">

          <h2>Photo Banner<a class="anchorjs-link"><span class="anchorjs-icon"></span></a></h2>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled value="<?= $foto_baner ?>">
              <div class="input-group-append">
                <span class="input-group-button">
                <a href="<?= base_url() ?>admin_profile/upploadbanner/<?= $key ?>"><button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#photo_banner" type="button"><i class="fa fa-edit"></i>  Edit</button></a>
                

                </span>
              </div>
            </div>
            
            
          <h2 id="visi-misi">Visi & Misi<a class="anchorjs-link" href="#visi-misi"><span class="anchorjs-icon"></span></a></h2>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled value="<?= $foto_visimisi ?>">
              <div class="input-group-append">
                <span class="input-group-button">
                <a href="<?= base_url() ?>admin_profile/uploadvisimisi/<?= $key ?>"><button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#visi_misi" type="button"><i class="fa fa-edit"></i>  Edit</button></a>
                </span>
              </div>
            </div>
            
            
          <h2 id="history">History<a class="anchorjs-link" href="#history"><span class="anchorjs-icon"></span></a></h2>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled value="<?= $foto_sejarah ?>">
              <div class="input-group-append">
                <div class="input-group-append">
                <span class="input-group-button">
                <a href="<?= base_url() ?>admin_profile/uploadsejarah/<?= $key ?>"><button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#sejarah" type="button"><i class="fa fa-edit"></i>  Edit</button></a>
                </span>
                </div>
              </div>
            </div>
            
            
          <h2 id="logo">Logo<a class="anchorjs-link" href="#logo"><span class="anchorjs-icon"></span></a></h2>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled value="<?= $foto_logo ?>">
              <div class="input-group-append">
                <span class="input-group-button">
                <a href="<?= base_url() ?>admin_profile/uploadlogo/<?= $key ?>"><button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#logom" type="button"><i class="fa fa-edit"></i>  Edit</button></a>
                </span>
              </div>
            </div>
            
            
          <h2 id="staff">Staff<a class="anchorjs-link" href="#staff"><span class="anchorjs-icon"></span></a></h2>
             <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled value="<?= $foto_staff ?>">
              <div class="input-group-append">
                <span class="input-group-button">
                <a href="<?= base_url() ?>admin_profile/uploadstaff/<?= $key ?>"><button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#logom" type="button"><i class="fa fa-edit"></i>  Edit</button></a>
                </span>
              </div>
            </div>
            
        </div>
        
  </div>
</div>
<?php $this->load->view('admin/footer.php')  ?>