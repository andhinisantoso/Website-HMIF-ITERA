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
    </div>
    <br><br><br> <br>
    <!-- AKHIR NAVBAR -->

    <!-- AWAL CONTENT -->
    <div class="container_news">
        <div class="header">
            <div class="info">
                <h1>Berita Seputar HMIF ITERA</h1>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row">

            <?php 
            foreach ($data->result() as $news){
            ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body post-module" style="padding: 0px">
                            <img src="<?= base_url(); ?>assets/gambar/news/<?= $news->foto; ?>" class="card-img-top" alt="...">
                            <div class="post-content">
                                <div class="category"><?= $news->tempat; ?></div>
                                <h1 class="title"><?= $news->judul ?></h1>
                                <h2 class="sub_title"><?= $news->hari ?>, <?= $news->tanggal ?> <?= $news->bulan ?> <?= $news->tahun ?></h2>
                                    <div class="card-read-more">
                                        <hr>
                                        <a href="<?= base_url(); ?>publik/readmore/<?= $news->id_berita; ?>" class="btn btn-link btn-block">Read More</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            <?php } ?>


            </div>
        </div>

    <!-- AKHIR CONTENT -->

    <!-- JAVASCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./script.js"></script>


</body>

</html>