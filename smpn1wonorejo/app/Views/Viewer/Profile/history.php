<!-- Template -->

<?= $this->extend('Viewer/Template/template_body') ?>
<?= $this->section('content') ?>

<!-- <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:400px; object-fit: fill; margin:0; margin-top:80px;"> -->

<div class="container">
    <!-- <h1>Ini halaman profile kepala sekolah</h1> -->
    <div class="row">
        <div class="col-md-10 mx-auto">

            <div class="text-center mb-4">
                <h2 style="font-family: 'Roboto', sans-serif;" class="mt-5"><b> SEJARAH SEKOLAH SMPN 1 WONOREJO </b></h2>
                <hr style="width: 10%; margin:auto; height:3px; color:#cd8d7b;">
            </div>
            
            <!-- <h3 class="text-center mt-4">Sejarah</h3> -->
            <!-- <h4 class="text-center">NIP</h4> -->
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