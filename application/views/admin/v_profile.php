<!DOCTYPE html>
<html lang="en" >

  <!-- awal head -->
  <head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/profile.css">

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
          <h1 id="profile-page">Profile Page<a class="anchorjs-link" href="#profile-page"><span class="anchorjs-icon"></span></a></h1>
          <p>Pada Profile Page, Administrator dapat meubah data seperti photo banner, visi & misi, sejarah, logo dan badan kepengurusan Himpunan Mahasiswa Informatika ITERA
              Data yang dapat dimasukan oleh Administrator berupa gambar (JPG, JPEG dan PNG).
          </p>
        </div>
      
        

        <div class="form-profile">
          <h2 id="photo-banner">Photo Banner<a class="anchorjs-link" href="#photo-banner"><span class="anchorjs-icon"></span></a></h2>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled>
              <div class="input-group-append">
                <span class="input-group-button">
                <button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#photo" type="button"><i class="fa fa-edit"></i>  Edit</button>
                </span>
              </div>
            </div>
            
            
          <h2 id="visi-misi">Visi & Misi<a class="anchorjs-link" href="#visi-misi"><span class="anchorjs-icon"></span></a></h2>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled>
              <div class="input-group-append">
                <span class="input-group-button">
                <button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#visi_misi" type="button"><i class="fa fa-edit"></i>  Edit</button>
                </span>
              </div>
            </div>
            
            
          <h2 id="history">History<a class="anchorjs-link" href="#history"><span class="anchorjs-icon"></span></a></h2>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled>
              <div class="input-group-append">
                <span class="input-group-button">
                <button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#historym" type="button"><i class="fa fa-edit"></i>  Edit</button>
                </span>
              </div>
            </div>
            
            
          <h2 id="logo">Logo<a class="anchorjs-link" href="#logo"><span class="anchorjs-icon"></span></a></h2>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled>
              <div class="input-group-append">
                <span class="input-group-button">
                <button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#logom" type="button"><i class="fa fa-edit"></i>  Edit</button>
                </span>
              </div>
            </div>
            
            
          <h2 id="staff">Staff<a class="anchorjs-link" href="#staff"><span class="anchorjs-icon"></span></a></h2>
             <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
              </div>
              <input type="text" class="form-control" disabled>
              <div class="input-group-append">
                <span class="input-group-button">
                <button class="edit btn btn-primary input-lg" data-toggle="modal" data-target="#staffm" type="button"><i class="fa fa-edit"></i>  Edit</button>
                </span>
              </div>
            </div>
            
        </div>
        
  </div>
</div>

<!-- modal untuk photo banner -->
<div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Photo Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Simpan Data</label>
          </div>
          <input type="file">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal photo banner -->

<!-- modal untuk photo visi misi -->
<div class="modal fade" id="visi_misi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Visi Misi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Simpan Data</label>
          </div>
          <input type="file">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal photo banner -->

<!-- modal untuk history -->
<div class="modal fade" id="historym" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Simpan Data</label>
          </div>
          <input type="file">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal history -->

<!-- modal untuk logo -->
<div class="modal fade" id="logom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Simpan Data</label>
          </div>
          <input type="file">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal logo -->

<!-- modal untuk staff -->
<div class="modal fade" id="staffm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Simpan Data</label>
          </div>
          <input type="file">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal staff -->

<!-- partial -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script  src="<?= base_url() ?>assets/profile.js"></script>

</body>
</html>
