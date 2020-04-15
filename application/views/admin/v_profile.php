<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php')  ?>
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
          <a href="<?= base_url(); ?>admin_profile/nambah">
          <button type="button" class="btn btn-outline-success"><i class="fa fa-plus">&nbsp</i>Tambah Data</button>
        </a>
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
                  <a href="<?= base_url(); ?>admin_profile/hapus/<?= $row->id_profil; ?>" onclick="return confirm ('Apakah yakin ingin menghapus data ini ?');">
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                    </button>
                  </a>
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
<?php $this->load->view('admin/footer.php')  ?>