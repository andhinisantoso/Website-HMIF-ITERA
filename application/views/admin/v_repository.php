<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php')  ?>
    <!-- Content -->
    <div class="main">
      <div class="hipsum">
        
        <div class="jumbotron">
          <h1 id="profile-page">Repository Page<a class="anchorjs-link" href="#profile-page"><span class="anchorjs-icon"></span></a></h1>
          <p>Pada Repository Page ,Administrator dapat mengupload file berdasar dengan link google drive dan dapat mengkategorikan file tersebut
          </p>
        </div>
        <div class="form-profile">
          <a href="<?= base_url(); ?>admin_repository/nambah">
          <button type="button" class="btn btn-outline-success"><i class="fa fa-plus">&nbsp</i>Tambah Data</button>
        </a>
          <hr>

          <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th style="width: 5px;">Nomor</th>
                <th>Kategori</th>
                <th>Nama File</th>
                <th>Link</th>
                <th style="width: 50px;">Aksi</th>
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
                <td><?= $row->nama_folder; ?></td>
                <td><?= wordlimit($row->nama_file); ?></td>
                <td><a href="<?= 'http://'.$row->link; ?>" target="_blank"><?= wordlimit($row->link); ?></a> </td>
                <td>
                  <a href="<?= base_url(); ?>admin_repository/edit/<?= $row->id_rep; ?>">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                  </a>
                  <a href="<?= base_url(); ?>admin_repository/hapus/<?= $row->id_rep; ?>" onclick="return confirm ('Apakah yakin ingin menghapus data ini ?');">
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
<?php $this->load->view('admin/footer.php')  ?>