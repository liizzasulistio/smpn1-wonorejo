<!-- Template -->
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<!-- header -->
<div class="mb-5">
    <div class="container container-fluid">
        <h1 style="font-family: 'Playfair Display', serif; margin-top: 130px;" class="text-center">Judul Artikel</h1>
    </div>
</div>

<img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:400px; object-fit: fill; margin:0; margin-bottom: 50px;">

<div class="container container-fluid">
    <!-- <h1>Ini halaman profile kepala sekolah</h1> -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <!-- <img alt="foto kepala sekolah" class="bd-placeholder-img img-fluid" width="500" height="500"> -->
            <P style="font-family: 'Roboto', sans-serif;" class="d-flex justify-content-between">
                Assalamualaikum, Diera pandemi Covid-19 bukan berati tidak ada kegiatan tetapi kegiatan yang kita lakukan bersifat positif dan inofatif, SMP Negeri 1 Wonorejo adalah sekolah Adiwiyata Nasional dan menuju Sekolah Adiwiyata Mandiri ikut berpatisipasi dalam Pembinaan Pelaksaan Peduli dan Berbudaya Linggkunan hidup Sekolah yang di selenggarakan oleh DLH (Dinas Lingkungan Hidup) Kab. Pasuruan.
            </P>
            <P style="font-family: 'Roboto', sans-serif;" class="d-flex justify-content-between">
                Kami SMP Negeri 1 Wonorejo mengikuti pebinaan di Desa Gerbo Kec. Purwadadi Kab. Pasuruan. Tanggal 25-26 November 2020 yang di ikuti oleh 30 sekolah Adiwiyata Sekabuapten Pasuruan. Kegiatan ini diperkenalkan dengan lingkungan alam dan potensi Desa Gerbo yang asri nuansa alam yang indah. Pembinan tersebut tentang Pembuatan komposter, Pembibitan, Pembuatan Tahu, Pengolahan kopi Robusta kabupaten Pasuruan.
            </P>
            <P style="font-family: 'Roboto', sans-serif;" class="d-flex justify-content-between">
                Kegiatan tersebut memberikan ispirasi bagi Sekolah adiwiyata kami untuk meningkatkan kompetensi dan berbudaya lingkungan hidup. Kami berharap kegiatan ini memberikan wawasan dan inspirasi dalam mempersiapkan sekolah menuju ADIWIYATA MANDIRI pada tahun 2021.
            </P>
        </div>
    </div>
</div>

<!-- kasih dulu nanti edit lagi  -->
<hr class="mt-5">

<div class="mt-5">
    <div class="container">
        <h1 style="font-family: 'Roboto', sans-serif;">Related Articles</h1>
    </div>
</div>

<div class="py-5">
    <div class="container container-fluid">
        <!-- news cards -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title"><a class="stretched-link" href="<?= base_url('#'); ?>" style="color:black; text-decoration: none;"> Card title </a></h5>
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
                        <h5 class="card-title"><a class="stretched-link" href="<?= base_url('#'); ?>" style="color:black; text-decoration: none;"> Card title </a></h5>
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
                        <h5 class="card-title"><a class="stretched-link" href="<?= base_url('#'); ?>" style="color:black; text-decoration: none;"> Card title </a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">oleh Administrator</small>
                            <small class="text-muted">12 Februari 2021</small>
                            <small class="text-muted">Dilihat 196 kali</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>