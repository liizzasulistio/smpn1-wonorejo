<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Ubah Visi dan Misi</strong></h2>
<hr class="my-3">

<div class="card mb-3 shadow-sm">
<div class="card-body">
<form action="/save-profile-update/<?= $visionMission['ProfileID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field();?>

    <div class="form-group mb-3 col-4">
        <label for="ProfileCat">Kategori</label>
        <select class="form-select" name="ProfileCat" id="ProfileCat">
        <option value="<?= $visionMission['ProfileCat']?>" selected><?= $visionMission['ProfileCat']?></option>
        <option value="Visi">Visi</option>
        <option value="Misi">Misi</option>
        <option value="Indikator">Indikator</option>
        <option value="Tujuan">Tujuan</option>
        </select>
    </div>

    <div class="form-group mb-3">
        <textarea class="form-control summernote" name="ProfileField" id="ProfileField">
        <?= set_value('ProfileField', $visionMission['ProfileField']) ?>
        </textarea>
    </div>
    
    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
</div></div>
<?= $this->endSection()?>