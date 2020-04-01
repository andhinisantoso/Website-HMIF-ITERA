<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Upload Photo Sejarah</title>
  <meta name="description" content="">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= base_url() ?>assets/dropify/dist/css/demo.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/dropify/dist/css/dropify.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url() ?>assets/fa/css/font-awesome.min.css">


</head>
<body>
<!-- partial:index.partial.html -->

<div class="upload">
  <div class="upload-files">
    <header>
   <p>
    <i class="fa fa-cloud-upload" aria-hidden="true"></i>
    <span class="up">up</span>
    <span class="load">load</span>
   </p>
  </header>
  </div>
  <form class="form-horizontal" action="<?php echo base_url(); ?>admin_profile/do_upload_sejarah" method="post" enctype="multipart/form-data">
  <div class="card-body">
    <input type="file" name="sejarah" id="input-file-now-custom-1" class="dropify" data-default-file="<?= base_url(); ?>assets/gambar/sejarah/<?= $data_foto ?>">
  </div>
  <input type="text" name="id_profil" value="<?= $id_profil; ?>" hidden>
  <div class="card-footer">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-save">&nbsp</i>
      Upload</button>
  </div>
</div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- partial -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/dropify/dist/js/dropify.min.js"></script>
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

</body>
</html>
