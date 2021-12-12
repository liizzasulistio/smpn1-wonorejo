<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Sejarah</strong></h2>
<hr class="my-3">

<div class="card mb-3 shadow-sm">
<div class="card-body">
<div class="col">
<?php if($history): ?>
    <?php foreach($history as $h):?>
        
    <p><?= $h['ProfileField']?></p>

    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateArticle">Ubah</a>
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteArticle">Hapus</a>          
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateArticle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateArticle" aria-hidden="true">
        <div class=" modal-xl modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="updateArticle">Ubah Artikel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/update-history/<?= $h['ProfileID']?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="ProfileField"></label>
                <textarea class="form-control summernote" name="ProfileField" id="ProfileField">
                <?= set_value('ProfileField', $h['ProfileField']) ?>
                </textarea>
            </div>
        </div>
            <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div></div></form>
    </div></div></div>

 <!-- Delete Modal -->
    <div class="modal fade" id="deleteArticle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteArticle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteArticle">Apakah Anda yakin untuk menghapus sejarah ini?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Pilih "Hapus" jika Anda telah yakin untuk menghapus sejarah ini.</p>
                <p>Tindakan ini tidak dapat dibatalkan.</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
                <a href="/delete-history/<?= $h['ProfileID']?>" class="btn btn-danger">Hapus</a>
            </div></div></div>
    </div>
    <?php endforeach;?></div>
    
<?php else: ?>
<br>
<form action="/save-profile" method="post" enctype="multipart/form-data">
<?= csrf_field(); ?> 
    <div class="form-group mb-3">
        <textarea class="form-control summernote" name="ProfileField" id="ProfileField"></textarea>
    </div>
    
    <input type="hidden" name="ProfileCat" value="Sejarah">
    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
</div>
</div>
<?php endif; ?>

<?= $this->endSection()?>