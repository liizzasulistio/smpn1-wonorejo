<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Tenaga Pendidik</strong></h2>
<hr class="my-3">
<div class="row mb-3">
    <div class="col-8">
        <a href="/admin/tenaga-kependidikan/create" class="btn btn-primary mb-2">Tambah</a>
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
<?php if($staff):?>
    
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col" style="text-align: center;">NUPTK</th>
                <th scope="col" style="text-align: center;">Nama</th>
                <th scope="col" style="text-align: center;">Jenis Kelamin</th>
                <th scope="col" style="text-align: center;">Posisi</th>
                <th scope="col" style="text-align: center;">Aksi</th>
            </tr>
        </thead>

        <tbody>   
        <?php $i = 1 + (10 * ($currentPage -1)); ?>
        <?php foreach($staff as $s):?>
            <tr>
                <th scope="col" style="text-align: center;"><?= $i ?>.</th>
                <td><?= $s['StaffNUPTK'] ?></td>
                <td><?= $s['StaffName'] ?></td>
                <td><?= $s['StaffGender'] ?></td>
                <td><?= $s['StaffPosition'] ?></td>
                <td style="text-align: center;">
                <a href="/admin/tenaga-kependidikan/<?= $s['slug'] ?>" class="btn btn-success">Detail</a>
                </td>
            </tr>

   
                </div>
                </div>
            </div>

    
            <?php $i++; ?> 


        <?php endforeach; ?>
        </tbody>
        
    </table>
   
    <?php endif; ?></div>

<!-- Pagination -->
<?= $pager->links('staff', 'pager'); ?>

</div>
<?= $this->endSection()?>