<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>

<div class="container container-fluid">
    <!-- <h1>Ini halaman profile kepala sekolah</h1> -->
    <div class="text-center mb-5">
        <h2 style="font-family: 'Roboto', sans-serif;" class="mt-5"><b> KEPALA SEKOLAH </b></h2>
        <hr style="width: 10%; margin:auto; height:3px; color:#084177;">
    </div>

    <div class="row">
        <div class="col-md-10 mx-auto">
        <?php foreach($teacher as $t): ?>
            <?php if($t['TeacherType'] == 'Kepala Sekolah'):?>
            <!-- <img alt="foto kepala sekolah" class="bd-placeholder-img img-fluid" width="500" height="500"> -->
            <!-- <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:300px; object-fit: fill; margin:0; margin-top:130px;"> -->
            <?php if($t['TeacherPhoto'] == null): ?>
            <img src="<?= base_url('/images/user.png')?>" class="mx-auto d-block ava-img" class="bd-placeholder-img rounded-circle">
           <?php else: ?>
            <img src="<?= base_url('./images/'.$t['TeacherPhoto']) ?>" class="mx-auto d-block ava-img" style="margin-top:50px; " class="bd-placeholder-img rounded-circle">    
            <?php endif; ?>
            <h3 class="text-center mt-4"><?= $t['TeacherName']?></h3>
            <h4 class="text-center"><?= $t['TeacherNIP']?></h4>
            <p class="d-flex justify-content-between my-3" style="max-width: 100px;">
               <?= $t['TeacherDesc']?>
           </p>
           <?php endif;?>  
        <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection()?>