<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h3>Tata Tertib</h3>

<div class="col-11">
<?php if($rules): ?>
    <?php foreach($rules as $rl):?>
        
    <p><?= $rl['RuleField']?></p>

    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateRule">Ubah</a>
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRule">Hapus</a>          
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateRule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateRule" aria-hidden="true">
        <div class=" modal-xl modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="updateRule">Ubah Tata Tertib</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/upadte-rules/<?= $rl['RuleID']?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="RuleField"></label>
                <textarea class="form-control summernote" name="RuleField" id="RuleField">
                <?= set_value('RuleField', $h['RuleField']) ?>
                </textarea>
            </div>
        </div>
            <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div></div></form>
    </div></div></div>

 <!-- Delete Modal -->
    <div class="modal fade" id="deleteRule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteRule" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteRule">Apakah Anda yakin untuk menghapus data ini?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Pilih "Hapus" jika Anda telah yakin untuk menghapus data ini.
                Tindakan ini tidak dapat dibatalkan.
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
                <a href="/delete-rules/<?= $rl['RuleID']?>" class="btn btn-primary">Hapus</a>
            </div></div></div>
    </div>
    <?php endforeach;?></div>
    
<?php else: ?>
<br>
<form action="/save-rules" method="post" enctype="multipart/form-data">
<?= csrf_field(); ?> 
    <div class="form-group mb-3">
        <textarea class="form-control summernote" name="RuleField" id="RuleField"></textarea>
    </div>

    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
<?php endif; ?>

<?= $this->endSection()?>