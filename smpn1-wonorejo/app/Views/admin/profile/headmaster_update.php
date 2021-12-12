<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Ubah Data Kepala Sekolah</strong></h2>
<hr class="my-3">

<div class="row">
<div class="col">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<form action="/save-headmaster-update/<?= $teacher['TeacherID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="slug" value="<?= $teacher['slug']?>">
    <input type="hidden" name="TeacherType" value="Kepala Sekolah"> 
    <input type="hidden" name="TeacherSubject" value="-"> 
    <div class="row">

        <!-- Headmaster's Photo -->
        <div class="col-6"><div class="form-group mb-1">
        <?php if($teacher['TeacherPhoto'] == null):?>
            <img src="<?= base_url('/icons/user.png')?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 200px;">
        <?php else: ?>
        <img src="<?= base_url('/images/'.$teacher['TeacherPhoto'])?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 190px;"  style="margin-top:50px;">
        <?php endif; ?>
            <label for="TeacherPhoto">Foto</label>
            <input type="file" class="form-control" name="TeacherPhoto" id="TeacherPhoto" onchange="changeImage();">
        </div></div>

        <div class="col-6">
        <div class="form-group mb-1">
            <label for="TeacherNIP">NIP</label>
            <input type="text" class="form-control <?= ($validation->hasError('TeacherNIP')) ? 'is-invalid' : ''; ?>" name="TeacherNIP" id="TeacherNIP" value="<?= set_value('TeacherNIP', $teacher['TeacherNIP']) ?>">
            <div class="invalid-feedback">
        </div></div>

        <div class="form-group mb-1">
            <label for="TeacherName">Nama</label>
            <input type="text" class="form-control <?= ($validation->hasError('TeacherName')) ? 'is-invalid' : ''; ?>" name="TeacherName" id="TeacherName" value="<?= set_value('TeacherName', $teacher['TeacherName']) ?>">
            <div class="invalid-feedback"></div></div>

        <div class="form-group mb-1 mt-2">
        <label for="TeacherGender">Jenis Kelamin</label>
            <label><input type="radio" name="TeacherGender" value="Laki-laki"<?php echo ($teacher['TeacherGender'] == 'Laki-laki' ? ' checked' : ''); ?> > Laki-laki</label>
            <label><input type="radio" name="TeacherGender" value="Perempuan"<?php echo ($teacher['TeacherGender'] == 'Perempuan' ? ' checked' : ''); ?> > Perempuan</label>
        </div>
    </div>


    <div class="form-group mb-3">
        <label for="TeacherDesc"></label>
        <textarea class="form-control summernote" name="TeacherDesc" id="TeacherDesc">
            <?= set_value('TeacherDesc', $teacher['TeacherDesc']) ?>
        </textarea>
    </div>
    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
</form>
</div></div></div>
<?= $this->endSection()?>