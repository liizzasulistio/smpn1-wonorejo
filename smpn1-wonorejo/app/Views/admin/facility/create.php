<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Tambah Data Fasilitas</strong></h2>
<hr class="my-3">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<form action="/save-facility" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group mb-1">
        <label for="FacilityName">Fasilitas</label>
        <input type="text" class="form-control <?= ($validation->hasError('FacilityName')) ? 'is-invalid' : ''; ?>" name="FacilityName" id="FacilityName" value="<?= old('FacilityName')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('FacilityName'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="FacilityImage">Foto</label>
        <input type="file" class="form-control <?= ($validation->hasError('FacilityImage')) ? 'is-invalid' : ''; ?>" name="FacilityImage" id="FacilityImage" value="<?= old('FacilityImage')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('FacilityImage'); ?>
        </div>
    </div>

    <div class="form-group mb-3">
        <label for="FacilityDesc">Deskripsi</label>
        <textarea class="form-control summernote" name="FacilityDesc" id="FacilityDesc"></textarea>
    </div>

     <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    
    </form>
</div></div>
<?= $this->endSection()?>