<?php $this->load->view('admin/header.php')  ?>
<?php $this->load->view('admin/sidebar.php') ?>  
  <!-- Content -->
  <div class="main">
    <div class="hipsum">

      <div class="jumbotron">
        <h1 id="news page">Event page<a class="anchorjs-link" href="#news-page"><span
              class="anchorjs-icon"></span></a></h1>
        <p>Pada bagian ini, Administrator dapa membuat berita tentang kegiatan yang telah dilakukan oleh HMIF
        </p>
      </div>

      <div class="form-profile">
        <br>
        <div id="tambah">
          <a href="<?= base_url(); ?>admin_news/nambah">
          <button type="button" class="btn btn-outline-success"><i class="fa fa-plus">&nbsp</i>Tambah Data</button>
          </a>
        <br><br>
          <div class="table-responsive">

          <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th style="width: 5px;">Nomor</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Waktu</th>
                <th>Tempat</th>
                <th>Foto</th>
                <th>Aksi</th>
                <!-- <th style="width: 50px;">Aksi</th> -->
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
                <td><?= wordlimit($row->judul); ?></td>
                <td><?= wordlimit($row->deskripsi);  ?></td>
                <td><?= $row->waktu;  ?></td>
                <td><?= wordlimit($row->tempat);  ?></td>
                <td>
                  <img src="<?= base_url(); ?>assets/gambar/news/<?= $row->foto; ?>" style="width:80px;cursor:pointer" 
                  onclick="onClick(this)" class="w3-hover-opacity">
                </td>
                <td>
                  <a href="<?= base_url(); ?>admin_news/edit/<?= $row->id_berita; ?>">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                  </a>
                  <a href="<?= base_url(); ?>admin_news/hapus/<?= $row->id_berita; ?>" onclick="return confirm ('Apakah yakin ingin menghapus data ini ?');">
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

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>
<?php $this->load->view('admin/footer.php')  ?>