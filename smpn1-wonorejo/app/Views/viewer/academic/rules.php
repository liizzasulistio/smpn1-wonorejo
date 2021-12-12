<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>

<div class="container">
    <!-- <h1>Ini halaman profile kepala sekolah</h1> -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <?php foreach($rules as $rl): ?>
                <div class="text-center mb-4">
                    <h2 style="font-family: 'Roboto', sans-serif;" class=""><b> <?= $rl['RuleTitle']?></b></h2>
                    <hr style="width: 10%; margin:auto; height:3px; color:#084177;">
                </div>
                
                <!-- <h3 class="text-center mt-4">Sejarah</h3> -->
                <!-- <h4 class="text-center">NIP</h4> -->
                <P class="d-flex justify-content-between my-3">
                    <?= $rl['RuleField']?>
                </P>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection()?>