<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HMIF - REPOSITORY PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/member/member.css">

</head>
<body>

    <!-- AWAL NAVBAR -->
    <div class="nav-header">
        <div class="nav-brand">

        </div>
        <i class="fa fa-bars fa-3x"></i>
        <div class="header-links">
            <ul>
                <li data-menuanchor="fifthPage"><a href="<?= base_url(); ?>publik/news">NEWS</a></li>
                <li data-menuanchor="secondPage"><a href="#about">REPOSITORY</a></li>
                <li data-menuanchor="thirdPage"><a href="<?= base_url(); ?>publik/member">DATA MEMBER</a></li>
                <li data-menuanchor="fourthPage"><a href="<?= base_url(); ?>publik">PROFILE</a></li>
            </ul>
            <ul>

                <img src="<?= base_url(); ?>/assets/gambar/profile/LOGO.png" height="100px" align="left" alt="logo" />

                <p>HMIF ITERA</p>
            </ul>
        </div>
    </div>
    </div>
    <br><br><br> <br>
    <!-- AKHIR NAVBAR -->
    <h1>Repository HMIF ITERA</h1>
    <hr>
    <div class="row mx-md-n1">
        <div class="col px-md-5">
            <div class="p-3 border bg-light">2019</div>
        </div>
        <div class="col px-md-5">
            <div class="p-3 border bg-light">2018</div>
        </div>
        <div class="col px-md-5">
            <a href="<?= base_url(); ?>member/pilih"> <div class="p-3 border bg-light">2017</div></a>
        </div>
        <div class="col px-md-5">
            <div class="p-3 border bg-light">2016</div>
        </div>
    </div>
    <br>
    <div class="row mx-md-n1">
        <div class="col px-md-5">
            <div class="p-3 border bg-light">2015</div>
        </div>
        <div class="col px-md-5">
            <div class="p-3 border bg-light">2014</div>
        </div>
        <div class="col px-md-5">
            <div class="p-3 border bg-light">2013</div>
        </div>
        <div class="col px-md-5">
            <div class="p-3 border bg-light">2012</div>
        </div>
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