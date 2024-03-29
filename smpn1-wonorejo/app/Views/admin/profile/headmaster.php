<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Kepala Sekolah</strong></h2>
<hr class="my-3">

<div class="card mb-3 shadow-sm">
<div class="card-body">
<?php if($teacher): ?>
    <?php foreach($teacher as $t):?>
    <?php if($t['TeacherType'] == 'Kepala Sekolah'):?>
        <div class="row">
            <div class="col-4">
            <?php if($t['TeacherPhoto'] == null): ?>
                    <img src="<?= base_url('/images/user.png')?>" class="mx-auto d-block ava-img" style="margin-top:2px; " class="bd-placeholder-img rounded-circle">
                <?php else: ?>
                    <img src="<?= base_url('./images/'.$t['TeacherPhoto']) ?>" class="mx-auto d-block ava-img" style="margin-top:2px; " class="bd-placeholder-img rounded-circle">    
                <?php endif; ?>
            </div>
            <div class="col-8">
                <p><?= $t['TeacherName'] ?></p>
                <p><?= $t['TeacherNIP'] ?></p>
                <p><?= $t['TeacherGender'] ?></p>
            </div>
        </div>
    
        <div class="row">
        <div class="col"> <p class="d-flex justify-content-between my-3" style="max-width: 100px;"><?= $t['TeacherDesc'] ?></p>
        </div></div>

        <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/admin/kepala-sekolah/update/<?= $t['slug'] ?>" class="btn btn-warning">Ubah</a>
            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteHeadmaster">Hapus</a>      
        </div>
    <?php endif;?>

    
<!-- Delete Modal -->
<div class="modal fade" id="deleteHeadmaster" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteHeadmaster" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteHeadmaster">Apakah Anda yakin untuk menghapus data tenaga pendidik ini?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Pilih "Hapus" jika Anda telah yakin untuk menghapus data tenaga pendidik ini.</p>
            <p>Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
            <a href="/delete-headmaster/<?= $t['TeacherID']?>" class="btn btn-danger">Hapus</a>
        </div></div></div>
</div>
<?php endforeach;?></div></div>
    
<?php else: ?>
<br>
<form action="/save-teacher" method="post" enctype="multipart/form-data">
<?= csrf_field(); ?>
  
    <div class="form-group mb-1">
        <label for="TeacherNIP">NIP</label>
        <input type="text" class="form-control <?= ($validation->hasError('TeacherNIP')) ? 'is-invalid' : ''; ?>" name="TeacherNIP" id="TeacherNIP" value="<?= old('TeacherNIP')?>" autofocus>
        <div class="invalid-feedback">
            <?= $validation->getError('TeacherNIP'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="TeacherName">Nama</label>
        <input type="text" class="form-control <?= ($validation->hasError('TeacherName')) ? 'is-invalid' : ''; ?>" name="TeacherName" id="TeacherName" value="<?= old('TeacherName')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('TeacherName'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="TeacherPhoto">Foto</label>
        <input type="file" class="form-control <?= ($validation->hasError('TeacherPhoto')) ? 'is-invalid' : ''; ?>" name="TeacherPhoto" id="TeacherPhoto" value="<?= old('TeacherPhoto')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('TeacherPhoto'); ?>
        </div>
    </div>

    <div class="form-group mb-1 mt-2">
        <label for="TeacherGender">Jenis Kelamin</label>
            <label><input type="radio" name="TeacherGender" value="Laki-laki"> Laki-laki</label>
            <label><input type="radio" name="TeacherGender" value="Perempuan"> Perempuan</label>
        <div class="invalid-feedback">
            <?= $validation->getError('TeacherGender'); ?>
        </div>
    </div>
   
    <div class="form-group mb-3">
        <label for="TeacherDesc">Deskripsi</label>
        <textarea class="form-control summernote" name="TeacherDesc" id="TeacherDesc"></textarea>
    </div>
    <input type="hidden" name="TeacherType" value="Kepala Sekolah"> 
    <input type="hidden" name="TeacherSubject" value="-"> 
    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
<?php endif; ?>
</form>
</div>

<?= $this->endSection()?>