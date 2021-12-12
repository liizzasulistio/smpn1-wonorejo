<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>
<!-- header -->
<div class="mt-5">
    <div class="container text-center">
        <h1 style="font-family: 'Roboto', sans-serif;" class="mb-2"><b> KEGIATAN </b></h1>
        <h3 style="font-family: 'Playfair Display', serif;">Portofolio Kegiatan Sekolah</h3>
        <hr style="width: 10%; margin:auto; height:3px; color:#cd8d7b;">
    </div>
</div>

<div class="py-5">
    <div class="container container-fluid">
        <!-- news cards -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><a class="stretched-link" href="<?= base_url('/detail-kegiatan'); ?>" style="color:black; text-decoration: none;"> Card title </a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">oleh Administrator</small>
                            <small class="text-muted">12 Februari 2021</small>
                            <small class="text-muted">Kategori</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><a class="stretched-link" href="<?= base_url('/detail-kegiatan'); ?>" style="color:black; text-decoration: none;"> Card title </a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">oleh Administrator</small>
                            <small class="text-muted">12 Februari 2021</small>
                            <small class="text-muted">kategori</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><a class="stretched-link" href="<?= base_url('/detail-kegiatan'); ?>" style="color:black; text-decoration: none;"> Card title </a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">oleh Administrator</small>
                            <small class="text-muted">12 Februari 2021</small>
                            <small class="text-muted">kategori</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><a class="stretched-link" href="<?= base_url('/detail-kegiatan'); ?>" style="color:black; text-decoration: none;"> Card title </a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">oleh Administrator</small>
                            <small class="text-muted">12 Februari 2021</small>
                            <small class="text-muted">kategori</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection()?>