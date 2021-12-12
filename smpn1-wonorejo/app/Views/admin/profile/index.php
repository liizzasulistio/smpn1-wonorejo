<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Visi dan Misi</strong></h2>
<hr class="my-3">

<div class="row mb-3">
    <div class="col-8">
        <a href="/admin/visi-misi/create" class="btn btn-primary mb-2">Tambah</a>
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
<?php if($visionMission):?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col" style="text-align: center;">Kategori</th>
                <th scope="col" style="text-align: center;">Isi</th>
                <th scope="col" style="text-align: center;">Aksi</th>
            </tr>
        </thead>

        <tbody>   
        <?php $i = 1 + (10 * ($currentPage - 1)); ?>
        <?php foreach($visionMission as $vm):?>
            <?php if($vm['ProfileCat'] != 'Sejarah'):?>
            <tr>
                <th scope="col" style="text-align: center;"><?= $i ?>.</th>
                <td><?= $vm['ProfileCat'] ?></td>
                <td><?= $vm['ProfileField'] ?></td>
                <td style="text-align: center;">
                <a href="/admin/visi-misi/<?= $vm['ProfileID'] ?>" class="btn btn-success">Detail</a>
                </td>
            </tr></div></div>
            </div>

    <?php endif; ?>
            <?php $i++; ?> 
   
        <?php endforeach;?>
        </tbody>
    </table>
<?php endif;?>
</div>
</div>
<!-- Pagination -->
<?= $pager->links('visionMission', 'pager'); ?>
<?= $this->endSection()?>