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
          <h1 id="profile-page">Profile Page<a class="anchorjs-link" href="#profile-page"><span class="anchorjs-icon"></span></a></h1>
          <p>Pada Profile Page, Administrator dapat meubah data seperti photo banner, visi & misi, sejarah, logo dan badan kepengurusan Himpunan Mahasiswa Informatika ITERA
              Data yang dapat dimasukan oleh Administrator berupa gambar (JPG, JPEG dan PNG).
          </p>
        </div>
      
        

        <div class="form-profile">

          <button type="button" class="btn btn-outline-success"><i class="fa fa-plus">&nbsp</i>Tambah Data</button>
          <hr>

          <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th style="width: 5px;">Nomor</th>
                <th>Nama Kepengurusan</th>
                <th>Periode</th>
                <th>Photo Banner</th>
                <th>Visi & Misi</th>
                <th>History</th>
                <th>Logo</th>
                <th>Staff</th>
                <th style="width: 50px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                  <?php
                  $no = 1;
                  foreach ($data->result() as $row ) {
                  ?>
                <td><?= $no++ ?></td>
                <td><?= $row->nm_kepengurusan; ?></td>
                <td><?= $row->periode; ?></td>
                <td><?= $row->foto_baner;  ?></td>
                <td><?= $row->foto_visimisi;  ?></td>
                <td><?= $row->foto_sejarah; ?></td>
                <td><?= $row->foto_logo;  ?></td>
                <td><?= $row->foto_staff;  ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin_profile/edit/<?= $row->id_profil; ?>">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                  </a>
                  <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                  </button>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
            
        </div>
        
  </div>
</div>

<!-- modal untuk photo banner -->
<div class="modal fade" id="photo_banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
