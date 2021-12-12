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
<form action="/save-activity-update/<?= $activity['ActivityID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="slug" value="<?= $activity['slug']?>">
    <div class="row">

        <div class="col"><div class="form-group mb-1">
        <?php if($activity['ActivityImage'] == null): ?>
                <img src="<?= base_url('/images/school.jpg')?>" class="mx-auto d-block image-preview image-prev" style="margin-top:2px; max-height: 400px;" id="image-preview"  style="width: 100%;">
         <?php else: ?>
                <img src="<?= base_url('./images/'.$activity['ActivityImage']) ?>" class="mx-auto d-block image-preview image-prev" style="margin-top:2px; max-height: 400px;" id="image-preview"  style="width: 100%;">    
        <?php endif; ?></div>
            <label for="ActivityImage">Foto Sampul</label>
            <input type="file" class="form-control" name="ActivityImage" id="ActivityImage" onchange="changeImage();">
        </div></div>

        <div class="col">
        <div class="form-group mb-1">
            <label for="ActivityTitle">Judul</label>
            <input type="text" class="form-control <?= ($validation->hasError('ActivityTitle')) ? 'is-invalid' : ''; ?>" name="ActivityTitle" id="ActivityTitle" value="<?= set_value('ActivityTitle', $activity['ActivityTitle']) ?>">
            <div class="invalid-feedback"></div>
        <div class="col">
        <div class="form-group mb-1">
            <label for="TagItem">Tag</label>
            <input type="text" class="form-control" placeholder="Penulisan tag dipisahkan dengan koma, contoh: adiwiyata, pramuka" name="TagItem" id="TagItem" value="<?= set_value('TagItem', $activity['TagItem']) ?>">
            <span class="text-danger"><?= $validation->getError('TagItem'); ?></span>
        </div></div>
    </div>


    <div class="form-group mb-3">
        <label for="ActivityText"></label>
        <textarea class="form-control summernote" name="ActivityText" id="ActivityText">
            <?= set_value('ActivityText', $activity['ActivityText']) ?>
        </textarea>
    </div>
    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
</form>
</div></div></div>
<?= $this->endSection()?>