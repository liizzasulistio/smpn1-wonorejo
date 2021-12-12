<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>


<div class="container">
<h2><strong>Tambah Kegiatan</strong></h2>
<hr class="my-3">
<div class="card mb-3 shadow-sm">
<div class="card-body">
    <form action="/save-activity" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>  
    <div class="row">
        <div class="form-group mb-1">
            <label for="ActivityTitle">Judul</label>
            <input type="text" class="form-control" name="ActivityTitle" id="ActivityTitle" value="<?= old('ActivityTitle')?>" autofocus>
            <span class="text-danger"><?= $validation->getError('ActivityTitle'); ?></span>
        </div>


        <div class="form-group mb-1">
            <label for="ActivityImage">Foto Sampul</label>
            <input type="file" class="form-control" name="ActivityImage" id="ActivityImage" value="<?= old('ActivityImage')?>">
            <span class="text-danger"><?= $validation->getError('ActivityImage'); ?></span>
        </div>

        <div class="form-group mb-1">
            <label for="ActivityText">Kegiatan</label>
            <textarea class="form-control summernote" name="ActivityText" id="ActivityText"></textarea>
        </div>

        <div class="form-group mb-1">
            <label for="TagItem">Tag</label>
            <input type="text" class="form-control" placeholder="Penulisan tag dipisahkan dengan koma, contoh: adiwiyata, pramuka" name="TagItem" id="TagItem" value="<?= old('TagItem')?>">
            <span class="text-danger"><?= $validation->getError('TagItem'); ?></span>
        </div>

    </div>

    <div class="mt-2 col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>



    </form>
</div></div></div>
<?= $this->endSection()?>