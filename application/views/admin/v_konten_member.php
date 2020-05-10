<!-- Content -->
  <div class="main">
    <div class="hipsum">

      <div class="jumbotron">
        <h1 id="member page">Member page<a class="anchorjs-link" href="#member-page"><span
              class="anchorjs-icon"></span></a></h1>
        <p>Pada bagian ini berisi data dari anggota HMIF
        </p>
      </div>

      <div class="form-profile">
        <br>
		<a href="<?= base_url(); ?>admin_member/nambah">
        <button type="button" class="btn btn-outline-success"><i class="fa fa-plus">&nbsp</i>Tambah Data</button>
    	</a>
          <hr>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th style="width: 5px;">Nomor</th>
                <th>Tahun Masuk</th>
                <th>Tahun Keluar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Judul Skripsi</th>
                <th>Link Skripsi</th>
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
                <td><?= $row->th_masuk; ?></td>
                <td><?= $row->th_lulus;  ?></td>
                <td><?= $row->nim;  ?></td>
                <td><?= wordlimit($row->nama);  ?></td>
                <td><?= wordlimit($row->jdl_skripsi);  ?></td>
                <td><a href="<?= 'http://'.$row->link; ?>" target="_blank"><?= wordlimit($row->link);  ?></td>
                <td>
                  <div class="row">
                    <div class="md-2">
                      <a href="<?= base_url(); ?>admin_member/edit/<?= $row->nim; ?>">
                        <button style="margin-left: 25px; margin-right: 5px;" type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                      </a>
                    </div>  
                    <div class="md2">
                      <a href="<?= base_url(); ?>admin_member/hapus/<?= $row->nim; ?>" onclick="return confirm ('Apakah yakin ingin menghapus data ini ?');">
                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                        </button>
                      </a>
                    </div>                  
                  </div>
                  
                  
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>

</div>