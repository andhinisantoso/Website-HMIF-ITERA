<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HMIF - Read More</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/publik_news/style.css">

</head>

<body>

    <!-- AWAL NAVBAR -->
    <header class="top-nav">
        <div class="nav-header">
            <div class="nav-brand">
                <img src="<?= base_url() ?>assets/publik_news/img/LOGO.jpeg" height="50px" align="left" alt="logo" />
                <p>HMIF ITERA</p>
            </div>
            <div class="header-links">
                <ul>
                    <li data-menuanchor="fifthPage"><a href="<?= base_url(); ?>publik/news">NEWS</a></li>
                    <li data-menuanchor="secondPage"><a href="#about">REPOSITORY</a></li>
                    <li data-menuanchor="thirdPage"><a href="<?= base_url(); ?>publik/member">DATA MEMBER</a></li>
                    <li data-menuanchor="fourthPage"><a href="<?= base_url(); ?>publik">PROFILE</a></li>
                </ul>
            </div>
        </div>

    </header>
    <!-- AKHIR NAVBAR -->

    </header>
    <div class="main">
        <div class="content">
            <?php 
            foreach ($data->result() as $news){
            ?>
            <h2 class="headline"><?=$news->judul;?></h2>
            <h3 class="place"><?=$news->tempat;?></h3>
            <h3 class="time"><?=$news->hari;?>,<?=$news->tanggal;?>,<?=$news->bulan;?>,<?=$news->tahun;?></h3>
            <div class="photo">
                <img src="<?= base_url(); ?>assets/gambar/news/<?=$news->foto;?>">
            </div>
            <p><?=$news->deskripsi;?></p>
            <?php } ?>
        </div>
    </div>
    <!-- partial -->


    <!-- JAVASCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>