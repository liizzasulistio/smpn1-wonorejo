<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="mb-5" style="margin-top:130px;">
    <div class="container text-center">
        <h1 style="font-family: 'Roboto', sans-serif;">Prestasi</h1>
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2">

        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>

                <div class="card-body">
                    <a href="<?= base_url('/'); ?>"><h5 class="card-title">Card title</h5></a>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">oleh Administrator</small>
                        <small class="text-muted">12 Februari 2021</small>
                        <small class="text-muted">Dilihat 196 kali</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">oleh Administrator</small>
                        <small class="text-muted">12 Februari 2021</small>
                        <small class="text-muted">Dilihat 196 kali</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- /col -->
    </div>
</div>

<?= $this->endSection() ?>