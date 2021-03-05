<?php $uri = service('uri'); ?> <!-- Nanti akan digunakan untuk identifikasi tab bar manakah yang sedang dibuka di browser -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
 
    <div class="position-absolute top-10 start-50 translate-middle-x">
    <a class="navbar-brand" href="<?= base_url('/'); ?>">
        <img src="images/logo.png" alt="SMPN 1 Wonorejo" width="40" height="40" style="border-radius: 100px;">
        <!-- Kalau masih tidak bisa, src untuk gambarnya bisa pakai link yg ini https://i.imgur.com/EOvVWjz.png -->
        SMPN 1 WONOREJO
    </a>
    </div>
    </div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary me-3" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Bagian ini nanti pakai looping dari database, jadi harus modif Back-End lagi -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 40px">
    <div class="container-fluid justify-content-center">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
      
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Berita</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Sejarah</a></li>
            <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="#">Fasilitas</a></li>
            <li><a class="dropdown-item" href="#">Kepala Sekolah</a></li>
            <li><a class="dropdown-item" href="#">Tenaga Pendidik</a></li>
            <li><a class="dropdown-item" href="#">Tenaga Kependidikan</a></li>
            <li><a class="dropdown-item" href="#">Prestasi</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Akademik
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Peraturan Akademik</a></li>
            <li><a class="dropdown-item" href="#">Tata Tertib</a></li>
            <li><a class="dropdown-item" href="#">Daftar Siswa</a></li>
            <li><a class="dropdown-item" href="#">Kalender Akademik</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kegiatan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Adiwiyata</a></li>
            <li><a class="dropdown-item" href="#">Kreasi & Inovasi</a></li>
            <li><a class="dropdown-item" href="#">Ekstrakulikuler</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Galeri</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PPDB
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Formulir</a></li>
            <li><a class="dropdown-item" href="#">Hasil Seleksi</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Alumni</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

