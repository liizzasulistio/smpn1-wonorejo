<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h3>Ubah Data Tenaga Pendidik</h3>
<div class="row">
<div class="col">
<form action="/save-teacher-update/<?= $teacher['TeacherID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="slug" value="<?= $teacher['slug']?>">
    <div class="row">

        <!-- Teacher's Photo -->
        <div class="col-6"><div class="form-group mb-1">
        <?php if($teacher['TeacherPhoto'] == null):?>
            <img src="<?= base_url('/icons/user.png')?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 200px;">
        <?php else: ?>
        <img src="<?= base_url('/images/'.$teacher['TeacherPhoto'])?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 200px;"  style="margin-top:50px;">
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

        <div class="form-group mb-1">
            <label for="TeacherSubject">Mata Pelajaran</label>
            <input type="text" class="form-control <?= ($validation->hasError('TeacherSubject')) ? 'is-invalid' : ''; ?>" name="TeacherSubject" id="TeacherSubject" value="<?= set_value('TeacherSubject', $teacher['TeacherSubject']) ?>">
            <div class="invalid-feedback"></div></div>
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
</div></div>
<?= $this->endSection()?>