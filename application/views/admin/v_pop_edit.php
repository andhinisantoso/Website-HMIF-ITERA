<!DOCTYPE html>
<html lang="en" >

  <!-- awal head -->
  <head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    </head>
  <!-- akhir head -->
  
  <!-- awal body -->
  <body>

    <!-- awal header -->
    <div class="header">
      <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
      </a>    
      <!-- awal navbar horizontal   -->
      <div class="logo">
        <nav class="tab">
          <ul>
            <li><a href="#"><i class="fa fa-user"></i><span>MY SITE</span></a></li>
            <li><a href="#"><i class="fa fa-newspaper-o"></i><span>READER</span></a></li>
          </ul>
        </nav>
      </div>
      <!-- akhir navbar horizontal -->

    </div>
    <!-- akhir header -->

    <!-- awal sidebar -->
    <div class="sidebar">
      <ul>
        <li><a href="#"><i class="fa fa-desktop"></i><span>Profile</span></a></li>
        <li><a href="#"><i class="fa fa-group"></i><span>Member</span></a></li>
        <li><a href="#"><i class="fa fa-folder"></i><span>Repository</span></a></li>
        <li><a href="#"><i class="fa fa-calendar"></i><span>Event</span></a></li>
    </div>
    <!-- akhir sidebar -->

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

<!-- partial -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script  src="<?= base_url() ?>assets/profile.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
