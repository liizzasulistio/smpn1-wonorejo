<!-- Template -->
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container container-fluid">
    <!-- <h1>Ini halaman profile kepala sekolah</h1> -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <!-- <img alt="foto kepala sekolah" class="bd-placeholder-img img-fluid" width="500" height="500"> -->
            <!-- <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:300px; object-fit: fill; margin:0; margin-top:130px;"> -->
            <img src="images/img_full.png" class="mx-auto d-block" style="margin-top:50px; "  width="140" height="140" class="bd-placeholder-img rounded-circle">            
            <h3 class="text-center mt-4">Nama Tenaga Pendidik</h3>
            <h4 class="text-center">Mata Pelajaran</h4>
            <P class="d-flex justify-content-between my-3">
                SMP Negeri 1 Wonorejo Kabupaten Pasuruan adalah lembaga pendidikan formal yang berada dibawah pembinaan Dinas Pendidikan Kabupaten Pasuruan.
                SMP Negeri 1 Wonorejo berada ditengah-tengah masyarakat atau lingkungan yang agamis yang mayoritas penduduknya adalah
                muslim yang taat pada ajaran atau syariat agama Islam.
                Disekitar SMP Negeri 1 Wonorejo banyak berdiri pondok-pondok pesantren dan lembaga pendidikan formal yang bernafaskan keagamaan,
                diantarannya Pondok Pesantren Terpadu Al-Yasini Wonorejo, Pondok Pesantern Sidogiri Kraton, MTs Negeri Wonorejo, MTs Al-Yasin dan lain-lain.
            </P>
        </div>
    </div>
</div>
<!-- 
<hr>

<div class="my-5">
    <div class="container">
        <h1 style="font-family: 'Roboto', sans-serif;" class="text-center">Related Articles</h1>
    </div>
</div>

<div class="container container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
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
    </div>
</div> -->


<?= $this->endSection() ?>