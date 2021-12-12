<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>

<!-- header -->
<div class="row" style="max-height: 400px;  overflow:hidden; ">
<img src="<?= base_url('/images/school.jpg')?>" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:auto;object-fit: fill; margin:0;">
</div>
<div class="mb-5">
    <div class="container container-fluid">
        <h1 style="font-family: 'Playfair Display', serif; margin-top: 20px;" class="text-center">Judul Artikel</h1>
    </div>
</div>



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
<hr class="mt-5">
<div class="container container-fluid">
    <div class="row">
        <div class="col-8">

        <h4 style="font-family: 'Roboto', sans-serif;">Komentar</h4>
        <?php if($comment): ?>
        <?php foreach($comment as $c): ?>

            <?php if($c['Status'] == 'Show'): ?>

            <div class="list-group-item list-group-item-action">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-1"><b><?= $c['CommentText']?></b></h6>
                                <small><?= $c['created_at']?></small>
                            </div>
                    <small><?= $c['CommentAuthor']?></small>
                    
        </div>

        <?php endif; ?>
            






        <?php endforeach; ?>
        <?php endif;?>


<br>
        <form action="/save-comment" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>  
            <input type="hidden" name="ActivityID_FK" value="<?= $activity['ActivityID']?>">
            <input type="hidden" name="slug" value="<?= $activity['slug']?>">

                <div class="form-group mb-1">
                    <label for="CommentText"><h4 style="font-family: 'Roboto', sans-serif;">Berikan Komentar</h4></label>
                    <textarea class="form-control summernote" name="CommentText" id="CommentText"></textarea>
                </div>

                <div class="form-group mb-1">
            <label for="CommentAuthor">Dari</label>
            <input type="text" class="form-control" name="CommentAuthor" id="CommentAuthor" value="<?= old('CommentAuthor')?>" autofocus>
            <span class="text-danger"><?= $validation->getError('CommentAuthor'); ?></span>
        </div>

            <div class="mt-2 col-12 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div></form>


        </div>


    <div class="col-4">
    <h4 style="font-family: 'Roboto', sans-serif;">Artikel Lainnya</h4>

    </div>
    </div>
</div>

<!-- kasih dulu nanti edit lagi  -->

<?= $this->endSection() ?>