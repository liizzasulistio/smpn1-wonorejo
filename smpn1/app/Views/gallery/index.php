<!-- Template -->
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="mb-5">
    <div class="container text-center">
        <h2 style="font-family: 'Roboto', sans-serif;"><b> GALLERY </b></h2>
        <hr style="width: 10%; margin:auto; height:3px; color:#cd8d7b;">
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2">
        <!-- <div class="row"> -->
        <div class="col-md-3 mb-4">
            <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; object-fit: fill;"> 
        </div>

        <div class="col-md-3 mb-4">
            <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; object-fit: fill;"> 
        </div>
        
        <div class="col-md-3 mb-4">
            <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; object-fit: fill;"> 
        </div>
        
        <div class="col-md-3 mb-4">
            <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; object-fit: fill;"> 
        </div>

        <div class="col-md-3 mb-4">
            <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; object-fit: fill;"> 
        </div>
    </div>
</div>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css"></script> -->


<?= $this->endSection() ?>