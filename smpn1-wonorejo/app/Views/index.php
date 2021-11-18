<!-- Template -->
<?= $this->extend('viewer/template/layout')?>
<?= $this->section('content')?>

<!-- corousel -->
<img src="images/school.jpg" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:650px; object-fit: fill;">

<div style="width: 100%; height: 60px; background-color:#084177; color:white; text-decoration: none;">
    <p class="pt-3 text-center">Unggul Dalam Prestasi, Beriman dan Bertakwa, Berkarakter dan Berbudaya Lingkungan</p>
</div>

<!-- main -->
<div class="container">
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
      <!-- <div class="feature-icon bg-primary bg-gradient">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 20 20">
          <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
        </svg>
      </div> -->
      <h2>Fasilitas Sekolah</h2>
      <p>Deskripsi nama judul.</p>
      <a href="#" class="btn btn-outline-primary mb-2">
        Lebih lanjut
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </a>
    </div>
    <div class="feature col">
      <!-- <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
      </div> -->
      <h2>Daftar Tenaga Pendidik</h2>
      <p>Deskripsi nama judul.</p>
      <a href="#" class="btn btn-outline-primary mb-2">
        Lebih lanjut
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </a>
    </div>
    <div class="feature col">
      <!-- <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
      </div> -->
      <h2>Prestasi</h2>
      <p>Deskripsi nama judul.</p>
      <a href="#" class="btn btn-outline-primary mb-2">
        Lebih lanjut
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </a>
    </div>
  </div>
</div>
<!-- /main -->

<div class="row mx-3">
  <div class="col-md-7">

    <!-- KEGIATAN -->
    <div class="container container-fluid">
      <hr>
      <div class="row py-md-3 py-lg-3">
          <div class="">
              <h2>Kegiatan Terbaru</h2>
          </div>
      </div>
    </div>

    <div class="container pb-3">
      <div class="row row-cols-1 row-cols-sm-2 g-3">
        <div class="col">
            <div class="card shadow-sm">
                <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                <div class="card-body" style="background-color: #F6F6F6;">
                    <h5 class="card-title"><a class="stretched-link" href="<?= base_url('/'); ?>" style="color:#084177; text-decoration: none;"><b> Card Title </b></a></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">oleh Administrator</small>
                      <small class="text-muted">12 Februari 2021</small>
                      <small class="text-muted">Kategori ini</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm">
                <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                <div class="card-body" style="background-color: #F6F6F6;">
                    <h5 class="card-title"><a class="stretched-link" href="<?= base_url('/'); ?>" style="color:#084177; text-decoration: none;"><b> Card Title </b></a></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">oleh Administrator</small>
                      <small class="text-muted">12 Februari 2021</small>
                      <small class="text-muted">Kategori ini</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm">
                <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                <div class="card-body" style="background-color: #F6F6F6;">
                    <h5 class="card-title"><a class="stretched-link" href="<?= base_url('/'); ?>" style="color:#084177; text-decoration: none;"><b> Card Title </b></a></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">oleh Administrator</small>
                      <small class="text-muted">12 Februari 2021</small>
                      <small class="text-muted">Kategori ini</small>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- PENGUMUMAN -->
  <div class="col-md-5">
    <div class="container container-fluid">
      <hr>
      <div class="row py-md-3 py-lg-3">
          <div class="">
              <h2>Pengumuman Terbaru</h2>
          </div>
      </div>
    </div>

    <div class="container pb-3">
      <div class="card mb-3">
        <div class="card-body" style="background-color: #F6F6F6;">
          <h5 class="card-title" style="color: #084177;"><b>Title</b></h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body" style="background-color: #F6F6F6;">
          <h5 class="card-title" style="color: #084177;"><b>Title</b></h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- <a href="#" class="float-md-end py-3 fs-4">Artikel <img src="icons/arrow-right.svg" /></a> -->
</div>


<?= $this->endSection() ?>