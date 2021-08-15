<!-- Template -->
<?= $this->extend('Viewer/Template/template') ?>
<?= $this->section('content') ?>

<div class="mb-5 mt-5">
    <div class="container text-center">
        <h2 style="font-family: 'Roboto', sans-serif;"><b> FASILITAS SEKOLAH </b></h2>
        <hr style="width: 10%; margin:auto; height:3px; color:#cd8d7b;">
    </div>
</div>

<div class="container">

    <div class="row row-cols-1 row-cols-md-2 mb-5">
        <div class="col-md-5">
            <img src="http://localhost:8080/images/img_full.png" class="inline" alt="SMPN 1 Wonorejo" style="width: 100%; height: 200px; object-fit: fill; margin:0;">
            <!-- <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:200px; object-fit: fill; "> -->
        </div>
        <div class="col-md-7">
            <h5><b> RUANG KELAS </b></h5>
            <P class="d-flex justify-content-between my-3">
                SMP Negeri 1 Wonorejo Kabupaten Pasuruan adalah lembaga pendidikan formal yang berada dibawah pembinaan Dinas Pendidikan Kabupaten Pasuruan.
                SMP Negeri 1 Wonorejo berada ditengah-tengah masyarakat atau lingkungan yang agamis yang mayoritas penduduknya adalah
                muslim yang taat pada ajaran atau syariat agama Islam.
                Disekitar SMP Negeri 1 Wonorejo banyak berdiri pondok-pondok pesantren dan lembaga pendidikan formal yang bernafaskan keagamaan,
                diantarannya Pondok Pesantren Terpadu Al-Yasini Wonorejo, Pondok Pesantern Sidogiri Kraton, MTs Negeri Wonorejo, MTs Al-Yasin dan lain-lain.
            </P>
        </div>
    </div>
    
    <div class="row row-cols-1 row-cols-md-2 mb-5">
        <div class="col-md-5">
            <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:200px; object-fit: fill; margin:0;">
        </div>
        <div class="col-md-7">
            <h5><b> RUANG GURU </b></h5>
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

<?= $this->endSection() ?>