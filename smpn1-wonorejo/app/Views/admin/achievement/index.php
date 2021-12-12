<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Prestasi</strong></h2>
<hr class="my-3">
<div class="row mb-3">
    <div class="col-8">
        <a href="/admin/prestasi/create" class="btn btn-primary mb-2">Tambah</a>
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
<?php if($achievement):?>
    
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col" style="text-align: center;">Nama Lomba</th>
                <th scope="col" style="text-align: center;">Waktu Pelaksanaan</th>
                <th scope="col" style="text-align: center;">Kejuaraan</th>
                <th scope="col" style="text-align: center;">Tingkat</th>
                <th scope="col" style="text-align: center;">Penyelenggara</th>
                <th scope="col" style="text-align: center;">Aksi</th>
            </tr>
        </thead>

        <tbody>   
        <?php $i = 1 + (10 * ($currentPage -1)); ?>
        <?php foreach($achievement as $a):?>
            <tr>
                <th scope="col" style="text-align: center;"><?= $i ?>.</th>
                <td><?= $a['ContestName'] ?></td>
                <td><?= $a['ContestDate'] ?></td>
                <td><?= $a['Championship'] ?></td>
                <td><?= $a['ContestLevel'] ?></td>
                <td><?= $a['Organizer'] ?></td>
                <td style="text-align: center;">
                <a href="/admin/prestasi/update/<?= $a['AchievementID'] ?>" class="btn btn-warning">Ubah</a>
                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteActivity">Hapus</a>   
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
<?= $pager->links('achievement', 'pager'); ?>

</div>
<?= $this->endSection()?>