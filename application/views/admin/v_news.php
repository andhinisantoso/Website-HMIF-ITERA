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

      <div class="container" style="width:1000px;">
        <br>
        <div id="tambah">
          <a href="<?= base_url(); ?>admin_news/nambah">
          <button type="button" class="btn btn-outline-success"><i class="fa fa-plus">&nbsp</i>Tambah Data</button>
          </a>
        </div>
        <br><br>
          <div class="table-responsive">

          <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th style="width: 5px;">Nomor</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
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
                  $no = 1;
                  foreach ($data->result() as $row ) {
                  ?>
                <td><?= $no++ ?></td>
                <td><?= $row->judul; ?></td>
                <td><?= $row->deskripsi;  ?></td>
                <td><?= $row->tanggal;  ?></td>
                <td><?= $row->waktu;  ?></td>
                <td><?= $row->tempat;  ?></td>
                <td><?= $row->foto;  ?></td>
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


<?php $this->load->view('admin/footer.php')  ?>