<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>

<div class="container container-fluid">

    <div class="text-center mb-5">
        <h2 style="font-family: 'Roboto', sans-serif;" class="mt-5"><b> TENAGA PENDIDIK </b></h2>
        <hr style="width: 10%; margin:auto; height:3px; color:#cd8d7b;">
    </div>

    <div class="row text-center pt-3">
   
        <?php foreach($teacher as $t): ?>

            <div class="col-md-3">
                <?php if($t['TeacherPhoto'] == null):?>
                    <img src="<?= base_url('./icons/user.png')?>"  class="bd-placeholder-img ava-img">
                <?php else: ?>
                <img src="<?= base_url('./images/'.$t['TeacherPhoto'])?>" class="bd-placeholder-img ava-img">
                <?php endif; ?>
                <h4 class="mt-2"><a  href="<?= base_url('/tenaga-pendidik/'.$t['slug']); ?>" style="color:black; text-decoration: none;"><?= $t['TeacherName']?></a></h4>
                <p><?= $t['TeacherSubject']?></p>
            </div>
<?php endforeach; ?>
          

    </div>
</div>

<?= $this->endSection() ?>