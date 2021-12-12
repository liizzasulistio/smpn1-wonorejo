<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h3>Tambah Data Siswa</h3>
<form action="/save-student" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group mb-1">
        <label for="StudentName">Nama Siswa</label>
        <input type="text" class="form-control <?= ($validation->hasError('StudentName')) ? 'is-invalid' : ''; ?>" name="StudentName" id="StudentName" value="<?= old('StudentName')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('StudentName'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="StudentPhoto">Foto</label>
        <input type="file" class="form-control <?= ($validation->hasError('StudentPhoto')) ? 'is-invalid' : ''; ?>" name="StudentPhoto" id="StudentPhoto" value="<?= old('StudentPhoto')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('StudentPhoto'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="StudentGender">Jenis Kelamin</label>
        <select aria-label="Default select example" class="form-select <?= ($validation->hasError('StudentGender')) ? 'is-invalid' : ''; ?>" name="StudentGender" id="StudentGender" value="">
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <div class="invalid-feedback">
            <?= $validation->getError('StudentGender'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="StudentClass">Kelas</label>
        <select aria-label="Default select example" class="form-select <?= ($validation->hasError('StudentClass')) ? 'is-invalid' : ''; ?>" name="StudentClass" id="StudentClass" value="">
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <div class="invalid-feedback">
            <?= $validation->getError('StudentClass'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="StudentClassName">Kelas</label>
        <select aria-label="Default select example" class="form-select <?= ($validation->hasError('StudentClassName')) ? 'is-invalid' : ''; ?>" name="StudentClassName" id="StudentClassName" value="">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
        </select>
        <div class="invalid-feedback">
            <?= $validation->getError('StudentClassName'); ?>
        </div>
    </div>
    <!-- <input type="hidden" name="TeacherType" value="Guru"> -->
     <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    
    </form>
</div>
<?= $this->endSection()?>