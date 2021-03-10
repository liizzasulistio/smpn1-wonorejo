<!-- Template -->
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<!-- corousel -->
<img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:570px; object-fit: fill; margin:0;">
<div style="width: 100%; height: 60px; background-color:#cfaf87;">
    <p class="pt-3 text-center">Unggul Dalam Prestasi, Beriman dan Bertakwa, Berkarakter dan Berbudaya Lingkungan</p>
</div>

<!-- main -->
<div class="container mt-5 mb-5">

    <!-- profile -->
    <div class="row ms-5">
        <div class="col-md-8">
            <h3>PROFIL</h3>
            <hr style="width: 30%">
            <p class="lh-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempor libero magna, ut sodales neque condimentum eget.
                Vivamus ac libero pharetra, venenatis sapien vitae, iaculis arcu. Vestibulum fringilla a massa vitae aliquet.
                Sed dapibus erat feugiat ex viverra, ut tristique ligula sagittis. Proin a pharetra magna, in efficitur magna. Donec condimentum quam est.
                Donec nec erat nibh. Nulla purus urna, blandit eget porttitor sed, tristique sed ipsum.
                Morbi eget dui vitae metus gravida sagittis. Sed a metus eu tellus commodo laoreet.
                Fusce luctus efficitur eros non ultricies. Duis molestie orci sed nisl tincidunt pretium.
                Donec sed metus id lacus congue vestibulum. Mauris aliquam efficitur porta.
            </p>
            <a href="#" class="float-md-end">Baca Selengkapnya <img src="icons/arrow-right.svg" /></a>
        </div>
        
        <div class="col-md-4">
            <img src="images/img_full.png" style="width: 60%; height: 100%" class="inline">
        </div>
    </div>

    <br>

    <!-- visi dan misi -->
    <div class="row my-5 ms-5">
        <div class="col-md-8 order-md-2">
            <h3>VISI & MISI</h3>
            <hr style="width: 30%">
            <p class="lh-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempor libero magna, ut sodales neque condimentum eget.
                Vivamus ac libero pharetra, venenatis sapien vitae, iaculis arcu. Vestibulum fringilla a massa vitae aliquet.
                Sed dapibus erat feugiat ex viverra, ut tristique ligula sagittis. Proin a pharetra magna, in efficitur magna. Donec condimentum quam est.
                Donec nec erat nibh. Nulla purus urna, blandit eget porttitor sed, tristique sed ipsum.
                Morbi eget dui vitae metus gravida sagittis. Sed a metus eu tellus commodo laoreet.
                Fusce luctus efficitur eros non ultricies. Duis molestie orci sed nisl tincidunt pretium.
                Donec sed metus id lacus congue vestibulum. Mauris aliquam efficitur porta.
            </p>
            <a href="#" class="float-md-end">Baca Selengkapnya <img src="icons/arrow-right.svg" /></a>
        </div>
        <div class="col-md-4 order-md-1">
            <img src="images/img_full.png" style="width: 60%; height: 100%" class="inline">
        </div>
    </div>

</div> 
<!-- /main -->

<hr>

<div class="text-center container">
    <div class="row py-md-5 py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h2>TULISAN TERBARU</h2>
      </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row cols-1 cols-sm-2 cols-md-3">
        <div class="col">
            <div class="card shadow-sm">
                <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm">
            <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm">
            <img src="images/img_full.png" width="100%" height="225" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="float-md-end py-3 fs-4">Artikel <img src="icons/arrow-right.svg" /></a>
</div>








<?= $this->endSection() ?>