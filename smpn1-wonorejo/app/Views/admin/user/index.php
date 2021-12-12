<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Pengguna</strong></h2>
<hr class="my-3">
<div class="row mb-3">
    <div class="col-8">
        <a href="/pengguna/create" class="btn btn-primary mb-2">Tambah</a>
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
<?php if($user):?>
    
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col" style="text-align: center;">Nama</th>
                <th scope="col" style="text-align: center;">Username</th>
                <th scope="col" style="text-align: center;">Status</th>
                <th scope="col" style="text-align: center;">Aksi</th>
            </tr>
        </thead>

        <tbody>   
        <?php $i = 1 + (10 * ($currentPage -1)); ?>
        <?php foreach($user as $u):?>
            <tr>
                <th scope="col" style="text-align: center;"><?= $i ?>.</th>
                <td><?= $u['UserName'] ?></td>
                <td><?= $u['UserUsername'] ?></td>
                <td><?= $u['UserRole'] ?></td>
                <td style="text-align: center;">
                <a href="/pengguna/update/<?= $u['UserUsername'] ?>" class="btn btn-warning">Ubah</a>
                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUser<?=$i?>">Hapus</a>   
                </td>
            </tr>

   
                </div>
                </div>
            </div>

   <!-- Delete Modal -->
<div class="modal fade" id="deleteUser<?=$i?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteUser<?=$i?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteUser<?=$i?>">Apakah Anda yakin untuk menghapus pengguna ini?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Pilih "Hapus" jika Anda telah yakin untuk menghapus pengguna ini.</p>
            <p>Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
            <a href="/delete-user/<?= $u['UserID']?>" class="btn btn-danger">Hapus</a>
        </div></div></div>  
</div> 
            <?php $i++; ?> 

        <?php endforeach; ?>
        </tbody>
        
    </table>
   
    <?php endif; ?></div>

<!-- Pagination -->
<?= $pager->links('user', 'pager'); ?>

</div>
<?= $this->endSection()?>