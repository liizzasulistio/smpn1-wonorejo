<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>

<div class="mb-5 mt-5">
    <div class="container text-center">
        <h2 style="font-family: 'Roboto', sans-serif;"><b> FASILITAS SEKOLAH </b></h2>
        <hr style="width: 10%; margin:auto; height:3px; color:#cd8d7b;">
    </div>
</div>

<div class="container">
<?php foreach($facility as $f):?>
    <div class="row row-cols-1 row-cols-md-2 mb-5">

        <div class="col-md-5">
        <?php if($f['FacilityImage'] == null):?>
                    <img src="<?= base_url('./images/school.jpg')?>"  class="bd-placeholder-img"  style="width: 100%; height:200px; object-fit: fill; margin:0;">
                <?php else: ?>
                <img src="<?= base_url('./images/'.$f['FacilityImage'])?>" class="bd-placeholder-img"  style="width: 100%; height:200px; object-fit: fill; margin:0;">
                <?php endif; ?>
        </div>
        <div class="col-md-7">

            <h5><b> <?= $f['FacilityName'] ?></b></h5>
            <P class="d-flex justify-content-between my-3">
                <?= $f['FacilityDesc'] ?>
            </P>
        </div>
    </div>
    
   <?php endforeach;?>

</div>

<?= $this->endSection() ?>