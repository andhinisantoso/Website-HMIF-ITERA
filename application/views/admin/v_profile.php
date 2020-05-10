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
                <th>No</th>
                <th style="width: 2px;">Nama Kepengurusan</th>
                <th>Periode</th>
                <th>Photo Banner</th>
                <th>Visi & Misi</th>
                <th>History</th>
                <th>Logo</th>
                <th>Staff</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                  <?php
                  function wordlimit($text,$limit=15){
                    if (strlen($text)>$limit) {
                      $word = mb_substr($text,0,$limit-3)."...";
                    }
                    else{
                      $word = $text;
                    }
                    return $word;
                  }
                  $no = 1;
                  foreach ($data->result() as $row ) {
                  ?>
                <td><?= $no++ ?></td>
                <td><?= wordlimit($row->nm_kepengurusan); ?></td>
                <td><?= $row->periode; ?></td>
                <td>
                  <img src="<?= base_url(); ?>assets/gambar/banner/<?= $row->foto_baner; ?>" style="width:80px;cursor:pointer" 
                  onclick="onClick(this)" class="w3-hover-opacity">
                </td>
                <td>
                  <img src="<?= base_url(); ?>assets/gambar/visimisi/<?= $row->foto_visimisi; ?>" style="width:80px;cursor:pointer" 
                  onclick="onClick(this)" class="w3-hover-opacity">
                </td>
                <td>
                  <img src="<?= base_url(); ?>assets/gambar/sejarah/<?= $row->foto_sejarah; ?>" style="width:80px;cursor:pointer" 
                  onclick="onClick(this)" class="w3-hover-opacity">
                </td>
                <td>
                  <img src="<?= base_url(); ?>assets/gambar/logo/<?= $row->foto_logo; ?>" style="width:80px;cursor:pointer" 
                  onclick="onClick(this)" class="w3-hover-opacity">
                </td>
                <td>
                  <img src="<?= base_url(); ?>assets/gambar/staff/<?= $row->foto_staff; ?>" style="width:80px;cursor:pointer" 
                  onclick="onClick(this)" class="w3-hover-opacity">
                </td>
                <td>
                  <?php 
                  if ($row->aktif == 1) {
                     ?>
                     <span class="badge badge-success">Aktif</span>
                   <?php } ?>
                </td>
                <td>
                  <a href="<?= base_url(); ?>admin_profile/edit/<?= $row->id_profil; ?>">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                  </a>
                  <a href="<?= base_url(); ?>admin_profile/hapus/<?= $row->id_profil; ?>" onclick="return confirm ('Apakah yakin ingin menghapus data ini ?');">
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                    </button>
                  </a>

                  <a href="<?= base_url(); ?>admin_profile/aktivasi_pengurusan/<?= $row->id_profil; ?>">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                  </a>

                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
            
        </div>
        
  </div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<!-- end modal staff -->
<?php $this->load->view('admin/footer.php')  ?>