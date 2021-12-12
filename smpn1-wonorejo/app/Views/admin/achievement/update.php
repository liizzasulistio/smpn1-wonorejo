<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Ubah Data Prestasi</strong></h2>
<hr class="my-3">

<div class="row">
<div class="col">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<form action="/save-achievement-update/<?= $achievement['AchievementID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="row">

        <div class="form-group mb-1">
        <label for="ContestName">Nama Lomba</label>
        <input type="text" class="form-control <?= ($validation->hasError('ContestName')) ? 'is-invalid' : ''; ?>" name="ContestName" id="ContestName" value="<?= set_value('ContestName', $achievement['ContestName'])?>">
        <div class="invalid-feedback">
            <?= $validation->getError('ContestName'); ?>
        </div>
        </div>

        <div class="form-group mb-1">
        <label for="ContestName">Tanggal Pelaksanaan</label>
        <input type="date" class="form-control <?= ($validation->hasError('ContestDate')) ? 'is-invalid' : ''; ?>" name="ContestDate" id="ContestDate" value="<?= set_value('ContestDate', $achievement['ContestDate'])?>">
        <div class="invalid-feedback">
            <?= $validation->getError('ContestDate'); ?>
        </div>
        </div>

        <div class="form-group mb-1">
        <label for="Championship">Kejuaraan</label>
        <input type="text" class="form-control <?= ($validation->hasError('Championship')) ? 'is-invalid' : ''; ?>" name="Championship" id="Championship" value="<?= set_value('Championship', $achievement['Championship'])?>">
        <div class="invalid-feedback">
            <?= $validation->getError('Championship'); ?>
        </div>
        </div>

        <div class="form-group mb-1">
            <label for="ContestLevel">Tingkat</label>
            <select aria-label="Default select example" class="form-select <?= ($validation->hasError('ContestLevel')) ? 'is-invalid' : ''; ?>" name="ContestLevel" id="ContestLevel">
                <option value="Kecamatan" <?= $achievement['ContestLevel'] == "Kecamatan" ? "selected" : null?>>Kecamatan</option>
                <option value="Kabupaten" <?= $achievement['ContestLevel'] == "Kabupaten" ? "selected" : null?>>Kabupaten</option>
                <option value="Provinsi" <?= $achievement['ContestLevel'] == "Provinsi" ? "selected" : null?>>Provinsi</option>
                <option value="Nasional" <?= $achievement['ContestLevel'] == "Nasional" ? "selected" : null?>>Nasional</option>
                <option value="Internasional" <?= $achievement['ContestLevel'] == "Internasional" ? "selected" : null?>>Internasional</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('ContestLevel'); ?>
            </div>
        </div>

        <div class="form-group mb-1">
        <label for="Organizer">Penyelenggara</label>
        <input type="text" class="form-control <?= ($validation->hasError('Organizer')) ? 'is-invalid' : ''; ?>" name="Organizer" id="Organizer" value="<?= set_value('Organizer', $achievement['Organizer'])?>">
        <div class="invalid-feedback">
            <?= $validation->getError('Organizer'); ?>
        </div>
        </div>


    </div>

    <br>
    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
</form>
</div></div></div>
<?= $this->endSection()?>