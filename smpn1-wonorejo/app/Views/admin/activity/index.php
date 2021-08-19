<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
    <h3>Kegiatan</h3>
    <br>
    <a href="/kegiatan/create" class="btn btn-primary">Tambah</a>
    
    <?php if($activity): ?>
        <?php $i = 1; ?>
<table class="table table-hover table-bordered mt-3">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Role</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($activity as $a): ?>
        <tr>
            <th scope="row"><?= $i?></th>
            <td scope="row"><?= $a['ActivityTitle']?></td>
            <td scope="row"><?= $a['UserID_FK']?></td>
            <td scope="row"><?= $a['ActivityText']?></td>
            <th scope="row">
                <a href="/pengguna/read/<?= $a['slug'] ?>" class="btn btn-success">Detail</a>
            </th>
        </tr>
        <?php $i++; ?>

<?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
</div>
    
</div>


<?= $this->endSection()?>