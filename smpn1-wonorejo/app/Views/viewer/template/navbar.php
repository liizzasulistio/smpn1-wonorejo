<?php $uri = service('uri'); ?>
<!-- Nanti akan digunakan untuk identifikasi tab bar manakah yang sedang dibuka di browser -->

<header style="background: #084177;">
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 60px;"> -->
    <div class="top-bar">
      <!-- <div class="container"> -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="top-header">
            <!-- <div class="mx-auto d-sm-flex d-block flex-sm-nowrap"> -->
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
              <img src="/icons/logo.png" alt="SMPN 1 Wonorejo" width="70" style="border-radius: 100px;" class="mt-2">
              <!-- Kalau masih tidak bisa, src untuk gambarnya bisa pakai link yg ini https://i.imgur.com/EOvVWjz.png -->
              <span class="navbar-brand flex-grow-1" style="color:white; text-decoration: none;"><b> SMPN 1 WONOREJO </b></span>
            </a>
          </div>
        </div>
      <!-- </div> -->
      <!-- </div> -->
    </div>
  <!-- </nav> -->

  <div class="container-fluid menu-bar navbar-dark" data-toggle="sticky-menu">
    <!-- <div class="container"> -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/"  style="color:white; text-decoration: none;">Beranda</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:white; text-decoration: none;">
                  Profil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?= base_url('/sejarah'); ?>">Sejarah</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/visi-dan-misi'); ?>">Visi & Misi</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/fasilitas'); ?>">Fasilitas</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/kepala-sekolah'); ?>">Kepala Sekolah</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/tenaga-pendidik'); ?>">Tenaga Pendidik</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/tenaga-kependidikan'); ?>">Tenaga Kependidikan</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/prestasi'); ?>">Prestasi</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:white; text-decoration: none;">
                  Akademik
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?= base_url('/peraturan-akademik'); ?>">Peraturan Akademik</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/tata-tertib'); ?>">Tata Tertib</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/daftar-siswa'); ?>">Daftar Siswa</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/kalender-akademik'); ?>">Kalender Akademik</a></li>
                </ul>
              </li>

              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:white; text-decoration: none;">
                  Kegiatan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?//= base_url('/adiwiyata'); ?>">Adiwiyata</a></li>
                  <li><a class="dropdown-item" href="<?//= base_url('/kreasi-dan-inovasi'); ?>">Kreasi & Inovasi</a></li>
                  <li><a class="dropdown-item" href="<?//= base_url('/ekstrakulikuler'); ?>">Ekstrakulikuler</a></li>
                </ul>
              </li> -->

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= base_url('/kegiatan');?>"  style="color:white; text-decoration: none;">Kegiatan</a>
              </li>


              <li class="nav-item">
                <a class="nav-link" style="color:white; text-decoration: none;" href="<?= base_url('/galeri'); ?>">Galeri</a>
              </li>

              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:white; text-decoration: none;">
                  PPDB
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Formulir</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/hasil-seleksi'); ?>">Hasil Seleksi</a></li>
                </ul>
              </li> -->

              <li class="nav-item">
                <a class="nav-link" style="color:white; text-decoration: none;" aria-current="page" href="#">Alumni</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Cari</button>
            </form>
          </div>
        </nav>
      </div>
  </div>
<!-- </nav> -->

  <!-- <div class="d-flex flex-column align-items-start"> -->
  <!-- Bagian ini nanti pakai looping dari database, jadi harus modif Back-End lagi -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 40px"> -->
  <!-- <div class="container container-fluid d-flex flex-column flex-md-row justify-content-between"> -->

  <!-- </nav> -->
</header>