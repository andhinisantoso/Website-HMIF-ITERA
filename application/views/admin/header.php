<!DOCTYPE html>
<html lang="en" >

  <!-- awal head -->
  <head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/profile.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dropify/dist/css/demo.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
  <!-- akhir head -->
  
  <!-- awal body -->
  <body>

    <!-- awal header -->
    <div class="header">
      <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
      </a>
    
      <!-- awal navbar horizontal   -->
      <div class="logo">
        <nav class="tab">
          <ul>
            <li><a href="#"><i class="fa fa-user"></i><span>MY SITE</span></a></li>
            <li><a href="#"><i class="fa fa-newspaper-o"></i><span>READER</span></a></li>
            <!-- <li><a href="<?= base_url(); ?>admin_profile/logout"><i class="fa fa-sign-out float-right"></i><span>LOGOUT</span></a></li>
 -->
            <a href="<?= base_url(); ?>admin_profile/logout">
            <button type="button" class="btn btn-warning btn-sm float-right" style="margin-right: 21px; margin-top: 8px">
              <i class="fa fa-sign-out">&nbsp
              </i>
              LOGOUT
            </button>
          </ul>
        </nav>
      </div>
      <!-- akhir navbar horizontal -->

    </div>
    <!-- akhir header -->