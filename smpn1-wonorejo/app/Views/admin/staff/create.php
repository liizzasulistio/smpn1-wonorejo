<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Tambah Data Staff</strong></h2>
<hr class="my-3">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<form action="/save-staff" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group mb-1">
        <label for="StaffNUPTK">NUPTK</label>
        <input type="text" class="form-control <?= ($validation->hasError('StaffNUPTK')) ? 'is-invalid' : ''; ?>" name="StaffNUPTK" id="StaffNUPTK" value="<?= old('StaffNUPTK')?>" autofocus>
        <div class="invalid-feedback">
            <?= $validation->getError('StaffNUPTK'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="StaffName">Nama</label>
        <input type="text" class="form-control <?= ($validation->hasError('StaffName')) ? 'is-invalid' : ''; ?>" name="StaffName" id="StaffName" value="<?= old('StaffName')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('StaffName'); ?>
        </div>
    </div>

    <div class="form-group mb-1 mt-2">
        <label for="StaffGender">Jenis Kelamin</label>
            <label><input type="radio" name="StaffGender" value="Laki-laki"> Laki-laki</label>
            <label><input type="radio" name="StaffGender" value="Perempuan"> Perempuan</label>
        <div class="invalid-feedback">
            <?= $validation->getError('StaffGender'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="StaffPhoto">Foto</label>
        <input type="file" class="form-control <?= ($validation->hasError('StaffPhoto')) ? 'is-invalid' : ''; ?>" name="StaffPhoto" id="StaffPhoto" value="<?= old('StaffPhoto')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('StaffPhoto'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="StaffPosition">Posisi</label>
        <input type="text" class="form-control <?= ($validation->hasError('StaffPosition')) ? 'is-invalid' : ''; ?>" name="StaffPosition" id="StaffPosition" value="<?= old('StaffPosition')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('StaffPosition'); ?>
        </div>
    </div>
   

    <div class="form-group mb-3">
        <label for="StaffDesc">Deskripsi</label>
        <textarea class="form-control summernote" name="StaffDesc" id="StaffDesc"></textarea>
    </div>


     <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    
    </form>
</div></div></div>
<?= $this->endSection()?>