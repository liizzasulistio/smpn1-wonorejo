<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>

<div class="container container-fluid">
    <!-- <h1>Ini halaman profile kepala sekolah</h1> -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <!-- <img alt="foto kepala sekolah" class="bd-placeholder-img img-fluid" width="500" height="500"> -->
            <!-- <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:300px; object-fit: fill; margin:0; margin-top:130px;"> -->
            <?php if($teacher['TeacherPhoto'] == null): ?>
            <img src="<?= base_url('/images/user.png')?>" class="bd-placeholder-img rounded-circle ava-img">
           <?php else: ?>
            <img src="<?= base_url('./images/'.$teacher['TeacherPhoto']) ?>" class="mx-auto d-block ava-img" style="margin-top:50px; " class="bd-placeholder-img rounded-circle">    
            <?php endif; ?>
            <h3 class="text-center mt-4"><?= $teacher['TeacherName']?></h3>
            <h4 class="text-center"><?= $teacher['TeacherSubject']?></h4>
            <p class="d-flex justify-content-between my-3" style="max-width: 100px;">
               <?= $teacher['TeacherDesc']?>
           </p>
        </div>
    </div>
</div>

<?= $this->endSection()?>