<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h3>Tambah Data Guru</h3>
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



    <div class="form-group mb-1">
        <label for="TeacherSubject">Mata Pelajaran</label>
        <input type="text" class="form-control <?= ($validation->hasError('TeacherSubject')) ? 'is-invalid' : ''; ?>" name="TeacherSubject" id="TeacherSubject" value="<?= old('TeacherSubject')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('TeacherSubject'); ?>
        </div>
    </div>
   

    <div class="form-group mb-3">
        <label for="TeacherDesc">Deskripsi</label>
        <textarea class="form-control summernote" name="TeacherDesc" id="TeacherDesc"></textarea>
    </div>


     <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    
    </form>
</div>
<?= $this->endSection()?>