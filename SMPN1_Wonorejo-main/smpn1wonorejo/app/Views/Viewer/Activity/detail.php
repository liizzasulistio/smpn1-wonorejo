<!-- Template -->
<?= $this->extend('Viewer/Template/template') ?>
<?= $this->section('content') ?>

<!-- header -->
<div class="mb-5 mt-5">
    <div class="container container-fluid">
        <h1 style="font-family: 'Playfair Display', serif; margin-top: 20px;" class="text-center">Judul Artikel</h1>
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
                <br>
                Kami SMP Negeri 1 Wonorejo mengikuti pebinaan di Desa Gerbo Kec. Purwadadi Kab. Pasuruan. Tanggal 25-26 November 2020 yang di ikuti oleh 30 sekolah Adiwiyata Sekabuapten Pasuruan. Kegiatan ini diperkenalkan dengan lingkungan alam dan potensi Desa Gerbo yang asri nuansa alam yang indah. Pembinan tersebut tentang Pembuatan komposter, Pembibitan, Pembuatan Tahu, Pengolahan kopi Robusta kabupaten Pasuruan.
            </P>
        </div>
    </div>
</div>

<hr>
<!-- komentar -->
<div class="container container-fluid col-md-9 mt-4">
    <h4 class="mb-4"><b>KOMENTAR</b></h4>
    <div class="form-floating mb-3">
        <input type="nama" class="form-control" id="floatingInput" placeholder="Nama Lengkap Anda">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Tulislah komentar disini" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Komentar</label>
    </div>

    <div class="list-group mt-4">
        <div class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1"><b>Nama Lengkap</b></h6>
            <small>Tanggal Upload</small>
            </div>
            <p class="mb-1 col-md-10">Some placeholder content in paragraph.</p>
        </div>
        <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1"><b>Nama Lengkap</b></h6>
            <small class="text-muted">Tanggal Upload</small>
            </div>
            <p class="mb-1">Some placeholder content in paragraph.</p>
        </div>
        <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1"><b>Nama Lengkap</b></h6>
            <small class="text-muted">Tanggal Upload</small>
            </div>
            <p class="mb-1">Some placeholder content in paragraph.</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>