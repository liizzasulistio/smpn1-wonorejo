<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>


<div class="container">
<h3>Pengguna</h3>
<br>
    <a href="/pengguna/create" class="btn btn-primary mb-2">Tambah</a>


    <?php if($user): ?>
        <?php $i = 1; ?>
<table class="table table-hover table-bordered">
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
        <?php foreach($user as $u): ?>
        <tr>
            <th scope="row"><?= $i?></th>
            <td scope="row"><?= $u['UserName']?></td>
            <td scope="row"><?= $u['UserUsername']?></td>
            <td scope="row"><?= $u['UserRole']?></td>
            <th scope="row">
                <a href="/pengguna/read/<?= $u['UserUsername'] ?>" class="btn btn-success">Detail</a>
            </th>
        </tr>
        <?php $i++; ?>

<?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
</div>

<?= $this->endSection()?>