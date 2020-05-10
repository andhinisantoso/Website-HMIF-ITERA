<?php $this->load->view('publik/header') ?>

<body>

    <!-- AWAL NAVBAR -->
    <header class="top-nav">
        <div class="nav-header">
            <div class="nav-brand">
                <img src="<?= base_url() ?>assets/publik/img/LOGO.jpeg" height="50px" align="left" alt="logo" />
                <p>HMIF ITERA</p>
            </div>
            <div class="header-links">
                <ul>
                    <li data-menuanchor="fifthPage"><a href="<?= base_url(); ?>publik/news">NEWS</a></li>
                    <li data-menuanchor="secondPage">
                        <a href="#about">REPOSITORY</a>
                    </li>
                    <li data-menuanchor="thirdPage">
                        <a href="<?= base_url(); ?>publik/member">DATA MEMBER</a>
                    </li>
                    <li data-menuanchor="fourthPage"><a href="<?= base_url(); ?>publik">PROFILE</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- AKHIR NAVBAR -->

    <div class="container">   

        <h1 style="padding-top: 150px;">Data Keanggotaan HMIF</h1>
        <hr>
        
            <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Tahun Masuk</th>
                        <th>Tahun Keluar</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Judul Skripsi</th>
                        <th>Link Skripsi</th>
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
                        <td><?= $row->th_masuk; ?></td>
                        <td><?= $row->th_lulus;  ?></td>
                        <td><?= $row->nim;  ?></td>
                        <td><?= $row->nama;  ?></td>
                        <td><?= $row->jdl_skripsi;  ?></td>
                        <td><a href="<?= 'http://'.$row->link; ?>" target="_blank" style="color: blue;"><?= wordlimit($row->link); ?></a></td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>

        </div>
    

    
    <footer>
        &copy; Sunny Go
    </footer>

    <!-- JAVASCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="<?= base_url(); ?>/assets/member/script.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>

</body>

</html>