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

    <!-- BODY -->

    <?php
    foreach ($data->result() as $row) {
    ?>
    
    <div class="profile">
        <div class="promotions">
            <!-- PHOTO BANNER -->
            <div class="grid" id="section1">
                <div class="shade">
                    <img src="<?= base_url(); ?>assets/gambar/banner/<?= $row->foto_baner; ?>" alt="banner"/>
                </div>
            </div>

            <!-- VISI MISI -->
            <div class="grid" id="section2">
                <div class="shade">
                    <img src="<?= base_url(); ?>assets/gambar/visimisi/<?= $row->foto_visimisi; ?>" alt="visi&misi" />
                </div>
            </div>

            <!-- HISTORY -->
            <div class="grid" id="section3">
                <div class="shade">
                    <img src="<?= base_url(); ?>assets/gambar/sejarah/<?= $row->foto_sejarah; ?>" alt="history" />
                </div>
            </div>

            <!-- LOGO -->
            <div class="grid" id="section4">
                <div class="shade">
                    <img src="<?= base_url(); ?>assets/gambar/logo/<?= $row->foto_logo; ?>" alt="logo" />
                </div>
            </div>

            <!-- KEPENGURUSAN -->
            <div class="grid" id="section5">
                <div class="shade">
                    <img src="<?= base_url(); ?>assets/gambar/staff/<?= $row->foto_staff; ?>" alt="staff" />
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    <div class="navigation">
        <ul>
            <li>
                <a href="#section1" data-number="1"></a>
            </li>

            <li>
                <a href="#section2" data-number="2"></a>
            </li>

            <li>
                <a href="#section3" data-number="3"></a>
            </li>

            <li>
                <a href="#section4" data-number="4"></a>
            </li>

            <li>
                <a href="#section5" data-number="5"></a>
            </li>
        </ul>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/publik/script.js"></script>
</body>

</html>