<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>

<div class="mb-5">
    <div class="container text-center">
        <h1 style="font-family: 'Roboto', sans-serif;" class="mt-5"><b> GALERI </b></h1>
        <h3 style="font-family: 'Playfair Display', serif;">Dokumentasi Kegiatan Sekolah</h3>
        <hr style="width: 10%; margin:auto; height:3px; color:#084177;">
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2">
        <!-- <div class="row"> -->
        <div class="col-md-3 mb-4">
            <img src="images/school.jpg" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; object-fit: fill;"> 
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

<?= $this->endSection()?>