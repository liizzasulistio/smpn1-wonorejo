<!-- Template -->
<?= $this->extend('Viewer/Template/template') ?>
<?= $this->extend('Viewer/Template/template_body') ?>
<?= $this->section('content') ?>

<div class="container container-fluid">

    <div class="text-center mb-5">
        <h2 style="font-family: 'Roboto', sans-serif;" class="mt-5"><b> TENAGA PENDIDIK </b></h2>
        <hr style="width: 10%; margin:auto; height:3px; color:#cd8d7b;">
    </div>

    <div class="row text-center pt-3">
        <!-- <div class="col-md-10 mx-auto"> -->
            <div class="col-md-3">
                <img src="images/img_full.png" width="150" height="150" class="bd-placeholder-img">
                <h4 class="mt-2"><a class="stretched-link" href="<?= base_url('/profile/detail-guru'); ?>" style="color:black; text-decoration: none;"> Nama Guru </a></h4>
                <p>mata pembelajaran</p>
            </div>

            <div class="col-md-3">
                <img src="images/img_full.png" width="150" height="150" class="bd-placeholder-img">
                 <h4 class="mt-2"><a class="stretched-link" href="<?= base_url('/profile/detail-guru'); ?>" style="color:black; text-decoration: none;"> Nama Guru </a></h4>
                <p>mata pembelajaran</p>
            </div>

            <div class="col-md-3">
                <img src="images/img_full.png" width="150" height="150" class="bd-placeholder-img">
                 <h4 class="mt-2"><a class="stretched-link" href="<?= base_url('/profile/detail-guru'); ?>" style="color:black; text-decoration: none;"> Nama Guru </a></h4>
                <p>mata pembelajaran</p>
            </div>

            <div class="col-md-3">
                <img src="images/img_full.png" width="150" height="150" class="bd-placeholder-img">
                 <h4 class="mt-2"><a class="stretched-link" href="<?= base_url('/profile/detail-guru'); ?>" style="color:black; text-decoration: none;"> Nama Guru </a></h4>
                <p>mata pembelajaran</p>
            </div>
        <!-- </div> -->
    </div><!-- /.row -->
</div>

<?= $this->endSection() ?>