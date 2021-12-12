<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h3>Ubah Data Siswa</h3>
<div class="row">
<div class="col">
<form action="/save-siswa-update/<?= $student['StudentID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="slug" value="<?= $student['slug']?>">
    <div class="row">

        <!-- Student's Photo -->
        <div class="col-6"><div class="form-group mb-1">
        <?php if($student['StudentPhoto'] == null):?>
            <img src="<?= base_url('/icons/user.png')?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 200px;">
        <?php else: ?>
        <img src="<?= base_url('/images/'.$student['StudentPhoto'])?>" class="mx-auto d-block mt-2 image-preview image-prev" id="image-preview" style="max-height: 200px;"  style="margin-top:50px;">
        <?php endif; ?>
            <label for="StudentPhoto">Foto</label>
            <input type="file" class="form-control" name="StudentPhoto" id="StudentPhoto" onchange="changeImage();">
        </div></div>

        <div class="col-6">
        <div class="form-group mb-1">
            <label for="StudentName">Nama</label>
            <input type="text" class="form-control <?= ($validation->hasError('StudentName')) ? 'is-invalid' : ''; ?>" name="StudentName" id="StudentName" value="<?= set_value('StudentName', $student['StudentName']) ?>">
            <div class="invalid-feedback"></div></div>

        <div class="form-group mb-1">
            <label for="StudentGender">Jenis Kelamin</label>
            <select aria-label="Default select example" class="form-select <?= ($validation->hasError('StudentGender')) ? 'is-invalid' : ''; ?>" name="StudentGender" id="StudentGender">
                <option value="Laki-laki" <?= $student['StudentGender'] == "Laki-laki" ? "selected" : null?>>Laki-Laki</option>
                <option value="Perempuan" <?= $student['StudentGender'] == "Perempuan" ? "selected" : null?>>Perempuan</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('StudentGender'); ?>
            </div>
        </div>

        <div class="form-group mb-1">
        <label for="StudentClass">Kelas</label>
        <select aria-label="Default select example" class="form-select <?= ($validation->hasError('StudentClass')) ? 'is-invalid' : ''; ?>" name="StudentClass" id="StudentClass" value="<?= set_value('StudentClass', $student['StudentClass']) ?>">
            <option value="7" <?= $student['StudentClass'] == "7" ? "selected" : null?>>7</option>
            <option value="8" <?= $student['StudentClass'] == "8" ? "selected" : null?>>8</option>
            <option value="9" <?= $student['StudentClass'] == "9" ? "selected" : null?>>9</option>
        </select>
        <div class="invalid-feedback">
            <?= $validation->getError('StudentClass'); ?>
        </div>
  
        <div class="form-group mb-1">
            <label for="StudentClassName">Kelas</label>
            <select aria-label="Default select example" class="form-select <?= ($validation->hasError('StudentClassName')) ? 'is-invalid' : ''; ?>" name="StudentClassName" id="StudentClassName" value="<?= set_value('StudentClassName', $student['StudentClassName']) ?>">
                <option value="A" <?= $student['StudentClassName'] == "A" ? "selected" : null?>>A</option>
                <option value="B" <?= $student['StudentClassName'] == "B" ? "selected" : null?>>B</option>
                <option value="C" <?= $student['StudentClassName'] == "C" ? "selected" : null?>>C</option>
                <option value="D" <?= $student['StudentClassName'] == "D" ? "selected" : null?>>D</option>
                <option value="E" <?= $student['StudentClassName'] == "E" ? "selected" : null?>>E</option>
                <option value="F" <?= $student['StudentClassName'] == "F" ? "selected" : null?>>F</option>
                <option value="G" <?= $student['StudentClassName'] == "G" ? "selected" : null?>>G</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('StudentClassName'); ?>
            </div>
        </div>
    </div>

    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
</form>
</div></div>
<?= $this->endSection()?>