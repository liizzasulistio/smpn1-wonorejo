<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<<<<<<< HEAD
<h2><strong>Ubah Data Tenaga Kependidikan</strong></h2>
<hr class="my-3">

<div class="row">
<div class="col">
<div class="card mb-3 shadow-sm">
<div class="card-body">
=======
<h3>Ubah Data Tenaga Kependidikan</h3>
<div class="row">
<div class="col">
>>>>>>> 8c697b6048a23750b04252eeaa964de8611f154b
<form action="/save-staff-update/<?= $staff['StaffID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="slug" value="<?= $staff['slug']?>">
    <div class="row">

        <!-- Staff's Photo -->
        <div class="col-6"><div class="form-group mb-1">
        <?php if($staff['StaffPhoto'] == null):?>
            <img src="<?= base_url('/icons/user.png')?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 200px;">
        <?php else: ?>
<<<<<<< HEAD
        <img src="<?= base_url('/images/'.$staff['StaffPhoto'])?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 190px;"  style="margin-top:50px;">
=======
        <img src="<?= base_url('/images/'.$staff['StaffPhoto'])?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 200px;"  style="margin-top:50px;">
>>>>>>> 8c697b6048a23750b04252eeaa964de8611f154b
        <?php endif; ?>
            <label for="StaffPhoto">Foto</label>
            <input type="file" class="form-control" name="StaffPhoto" id="StaffPhoto" onchange="changeImage();">
        </div></div>

        <div class="col-6">
        <div class="form-group mb-1">
            <label for="StaffNUPTK">NUPTK</label>
            <input type="text" class="form-control <?= ($validation->hasError('StaffNUPTK')) ? 'is-invalid' : ''; ?>" name="StaffNUPTK" id="StaffNUPTK" value="<?= set_value('StaffNUPTK', $staff['StaffNUPTK']) ?>">
            <div class="invalid-feedback">
        </div></div>

        <div class="form-group mb-1">
            <label for="StaffName">Nama</label>
            <input type="text" class="form-control <?= ($validation->hasError('StaffName')) ? 'is-invalid' : ''; ?>" name="StaffName" id="StaffName" value="<?= set_value('StaffName', $staff['StaffName']) ?>">
            <div class="invalid-feedback"></div></div>

        <div class="form-group mb-1">
<<<<<<< HEAD
            <label for="StaffPosition">Posisi</label>
            <input type="text" class="form-control <?= ($validation->hasError('StaffPosition')) ? 'is-invalid' : ''; ?>" name="StaffPosition" id="StaffPosition" value="<?= set_value('StaffPosition', $staff['StaffPosition']) ?>">
            <div class="invalid-feedback"></div></div>

        <div class="form-group mb-1 mt-2">
        <label for="StaffGender">Jenis Kelamin</label>
            <label><input type="radio" name="StaffGender" value="Laki-laki"<?php echo ($staff['StaffGender'] == 'Laki-laki' ? ' checked' : ''); ?> > Laki-laki</label>
            <label><input type="radio" name="StaffGender" value="Perempuan"<?php echo ($staff['StaffGender'] == 'Perempuan' ? ' checked' : ''); ?> > Perempuan</label>
=======
            <label for="StaffGender">Jenis Kelamin</label>
            <select aria-label="Default select example" class="form-select <?= ($validation->hasError('StaffGender')) ? 'is-invalid' : ''; ?>" name="StaffGender" id="StaffGender">
                <option value="Laki-laki" <?= $staff['StaffGender'] == "Laki-laki" ? "selected" : null?>>Laki-Laki</option>
                <option value="Perempuan" <?= $staff['StaffGender'] == "Perempuan" ? "selected" : null?>>Perempuan</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('StaffGender'); ?>
            </div>
        </div>

        <div class="form-group mb-1">
            <label for="StaffPosition">Posisi</label>
            <input type="text" class="form-control <?= ($validation->hasError('StaffPosition')) ? 'is-invalid' : ''; ?>" name="StaffPosition" id="StaffPosition" value="<?= set_value('StaffPosition', $staff['StaffPosition']) ?>">
            <div class="invalid-feedback"></div></div>
>>>>>>> 8c697b6048a23750b04252eeaa964de8611f154b
        </div>
    </div>


    <div class="form-group mb-3">
        <label for="StaffDesc"></label>
        <textarea class="form-control summernote" name="StaffDesc" id="StaffDesc">
            <?= set_value('StaffDesc', $staff['StaffDesc']) ?>
        </textarea>
    </div>
    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
</form>
<<<<<<< HEAD
</div></div></div>
=======
</div></div>
>>>>>>> 8c697b6048a23750b04252eeaa964de8611f154b
<?= $this->endSection()?>