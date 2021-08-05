<div class="flex-shrink-0 p-3" style="width: 300px; height: 1000; background: #084177;">
<a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <img src="<?= base_url('icons/logo.png')?>" width="70">
      <span class="navbar-brand flex-grow-1">SMPN 1 WONOREJO</span>
    </a>
    <ul class="list-unstyled ps-0">

      <li class="mb-1">
        <a class="link-dark rounded" href="/dashboard">
        <button class="btn align-items-center rounded ">
          Dashboard
        </button></a> 
      </li>
      <li class="mb-1">
        <a class="link-dark rounded" href="/admin-profil-sekolah">
        <button class="btn align-items-center rounded ">
          Profil Sekolah
        </button></a> 
      </li>

      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Profil Sekolah
        </button>

        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/admin-sejarah" class="link-dark rounded">Sejarah</a></li>
            <li><a href="/admin-visi-misi" class="link-dark rounded">Visi dan Misi</a></li>
            <li><a href="/admin-fasilitas" class="link-dark rounded">Fasilitas</a></li>
            <li><a href="/admin-prestasi" class="link-dark rounded">Prestasi</a></li>

          </ul>
        </div>
      </li>




      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Pegawai
        </button>

        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/admin-kepala-sekolah" class="link-dark rounded">Kepala Sekolah</a></li>
            <li><a href="/admin-tenaga-pendidik" class="link-dark rounded">Tenaga Pendidik</a></li>
            <li><a href="/admin-tenaga-kependidikan" class="link-dark rounded">Tenaga Kependidikan</a></li>

          </ul>
        </div>
      </li>


      <li class="mb-1">
      <!-- 1 tabel tapi kategorinya udah dibuatin -->
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
         Kegiatan
        </button>

        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Adiwiyata</a></li>
            <li><a href="#" class="link-dark rounded">Kreasi & Inovasi</a></li>
            <li><a href="#" class="link-dark rounded">Ekstrakulikuler</a></li>
          </ul>
        </div>
      </li>







      
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          <?= session()->get('UserUsername')?>
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/settings" class="link-dark rounded">Settings</a></li>
            <li><a href="/logout" class="link-dark rounded">Log out</a></li>
          </ul>
        </div>
      </li>
    </ul>
</div>