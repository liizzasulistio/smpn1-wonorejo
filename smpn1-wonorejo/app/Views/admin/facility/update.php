<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Ubah Artikel</strong></h2>
<hr class="my-3">

<div class="row">
<div class="col">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<form action="/save-facility-update/<?= $facility['FacilityID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="row">

        <div class="col"><div class="form-group mb-1">
        <?php if($facility['FacilityImage'] == null): ?>
                <img src="<?= base_url('/images/school.jpg')?>" class="mx-auto d-block image-preview image-prev" style="margin-top:2px; max-height: 400px;" id="image-preview"  style="width: 100%;">
         <?php else: ?>
                <img src="<?= base_url('./images/'.$facility['FacilityImage']) ?>" class="mx-auto d-block image-preview image-prev" style="margin-top:2px; max-height: 400px;" id="image-preview"  style="width: 100%;">    
        <?php endif; ?></div>
            <label for="FacilityImage">Foto</label>
            <input type="file" class="form-control" name="FacilityImage" id="FacilityImage" onchange="changeImage();">
        </div></div>

        <div class="col">
        <div class="form-group mb-1">
            <label for="FacilityName">Nama Fasilitas</label>
            <input type="text" class="form-control <?= ($validation->hasError('FacilityName')) ? 'is-invalid' : ''; ?>" name="FacilityName" id="FacilityName" value="<?= set_value('FacilityName', $facility['FacilityName']) ?>">
            <div class="invalid-feedback"></div>
    </div>


    <div class="form-group mb-3">
        <label for="FacilityDesc"></label>
        <textarea class="form-control summernote" name="FacilityDesc" id="FacilityDesc">
            <?= set_value('FacilityDesc', $facility['FacilityDesc']) ?>
        </textarea>
    </div>
    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
</form>
</div></div></div>
<?= $this->endSection()?>