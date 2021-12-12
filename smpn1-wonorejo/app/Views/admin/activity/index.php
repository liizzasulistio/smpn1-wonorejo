<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Kegiatan</strong></h2>
<hr class="my-3">
    <div class="row mb-3">
    <div class="col-8">
        <a href="/admin/kegiatan/create" class="btn btn-primary mb-2">Tambah</a>
    </div>
    <div class="col-4"><form method="get">
        <div class="input-group">
        <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="keyword">
        <button class="btn btn-primary" type="submit" name="submit">Cari</button>
    </form></div>
    </div>
</div>
<div class="card mb-3 shadow-sm">
<div class="card-body">
<!-- Showing message after CRUD -->
<?php if(session()->getFlashdata('message')) : ?>
  <div class="alert alert-light mt-2" role="alert">
    <?= session()->getFlashdata('message'); ?>
  </div>
<?php endif; ?>
    
<?php if($activity): ?>
        <?//php// $i = 1; ?>
<table class="table table-hover table-bordered mt-3">
    <thead>
        <tr>
            <th scope="col" style="text-align: center;">No.</th>
            <th scope="col" style="text-align: center;">Judul</th>
            <th scope="col" style="text-align: center;">Penulis</th>
            <th scope="col" style="text-align: center;">Tag</th>
            <th scope="col" style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $i = 1 + (10 * ($currentPage -1)); ?>
        <?php foreach($activity as $a): ?>
        <tr>
            <th scope="col" style="text-align: center;"><?= $i ?>.</th>
            <td scope="row"><?= $a['ActivityTitle']?></td>
            <td scope="row"><?= $a['UserName']?></td>
            <td scope="row"><?= $a['TagItem']?></td>
            <th scope="row">
                <a href="/admin/kegiatan/<?= $a['slug'] ?>" class="btn btn-success">Detail</a>
            </th>
        </tr>
        <?php $i++; ?>

<?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
</div>
    

<!-- Pagination -->
<?= $pager->links('activity', 'pager'); ?>
</div>


<?= $this->endSection()?>