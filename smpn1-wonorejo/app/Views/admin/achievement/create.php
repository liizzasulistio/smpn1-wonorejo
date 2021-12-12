<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Tambah Data Prestasi</strong></h2>
<hr class="my-3">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<form action="/save-achievement" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group mb-1">
        <label for="ContestName">Nama Lomba</label>
        <input type="text" class="form-control <?= ($validation->hasError('ContestName')) ? 'is-invalid' : ''; ?>" name="ContestName" id="ContestName" value="<?= old('ContestName')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('ContestName'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="ContestDate">Tanggal Pelaksanaan</label>
        <input type="date" class="form-control <?= ($validation->hasError('ContestDate')) ? 'is-invalid' : ''; ?>" name="ContestDate" id="ContestDate" value="<?= old('ContestDate')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('ContestDate'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
        <label for="Championship">Kejuaraan</label>
        <input type="text" placeholder="Juara 1" class="form-control <?= ($validation->hasError('Championship')) ? 'is-invalid' : ''; ?>" name="Championship" id="Championship" value="<?= old('Championship')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('Championship'); ?>
        </div>
    </div>

    <div class="form-group mb-1">
            <label for="ContestLevel">Tingkat</label>
            <select aria-label="Default select example" class="form-select <?= ($validation->hasError('ContestLevel')) ? 'is-invalid' : ''; ?>" name="ContestLevel" id="ContestLevel">
                <option value="Kecamatan">Kecamatan</option>
                <option value="Kabupaten">Kabupaten</option>
                <option value="Provinsi">Provinsi</option>
                <option value="Nasional">Nasional</option>
                <option value="Internasional">Internasional</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('ContestLevel'); ?>
            </div>
        </div>


    <div class="form-group mb-1">
        <label for="Organizer">Penyelenggara</label>
        <input type="text" class="form-control <?= ($validation->hasError('Organizer')) ? 'is-invalid' : ''; ?>" name="Organizer" id="Organizer" value="<?= old('Organizer')?>">
        <div class="invalid-feedback">
            <?= $validation->getError('Organizer'); ?>
        </div>
    </div>
   
    <br>
     <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    
    </form>
</div></div>
<?= $this->endSection()?>