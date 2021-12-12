<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Komentar</strong></h2>
<hr class="my-3">
    <div class="row mb-3">
    <div class="col-8">
       <!-- Buat Sorting -->
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

    <?php if($comment): ?>
        <?//php// $i = 1; ?>
<table class="table table-hover table-bordered mt-3">
    <thead>
        <tr>
            <th scope="col" style="text-align: center;">No.</th>
            <th scope="col" style="text-align: center;">Judul Kegiatan</th>
            <th scope="col" style="text-align: center;">Dari</th>
            <th scope="col" style="text-align: center;">Status</th>
            <th scope="col" style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $i = 1 + (10 * ($currentPage -1)); ?>
        <?php foreach($comment as $c): ?>
        <tr>
            <th scope="col" style="text-align: center;"><?= $i ?>.</th>
            <td scope="row"><?= $c['ActivityTitle']?></td>
            <td scope="row"><?= $c['CommentAuthor']?></td>
            <td scope="row" style="text-align: center;">
            <?php if($c['Status'] == 'Show'): ?>
                <span class="badge bg-primary"><?= $c['Status']?></td></span>
                <?php else: ?>
                    <span class="badge bg-secondary"><?= $c['Status']?></td></span>    
                    <?php endif; ?>
            <th scope="row" style="text-align: center;">
                <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateComment<?=$i?>">Ubah Status</a>
                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteComment<?=$i?>">Hapus</a>      
            </th>
        </tr>
        


<!-- Update Modal -->
<div class="modal fade" id="updateComment<?=$i?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateComment<?=$i?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateComment<?=$i?>">Ubah Status Komentar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        <form action="/save-comment-update/<?= $c['CommentID']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="ActivityID_FK" value="<?= $c['ActivityID_FK']?>">
        <div class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between">
                <h6 class="mb-1"><b><?= $c['CommentText']?></b></h6>
                    <small><?= $c['created_at']?></small>
                </div>
                <p><?= $c['ActivityTitle']?></p>
                <small><?= $c['CommentAuthor']?></small>
        </div>

        <div class="form-group mb-1 mt-2">
        <label for="Status">Status</label>
            <label><input type="radio" name="Status" value="Show"<?php echo ($c['Status'] == 'Show' ? ' checked' : ''); ?> > Show</label>
            <label><input type="radio" name="Status" value="Hide"<?php echo ($c['Status'] == 'Hide' ? ' checked' : ''); ?> > Hide</label>
        </div>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
            <button class="btn btn-primary">Simpan</button></form>
        </div></div></div>  
</div>


















<!-- Delete Modal -->
<div class="modal fade" id="deleteComment<?=$i?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteComment<?=$i?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteComment<?=$i?>">Apakah Anda yakin untuk menghapus komentar ini?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Pilih "Hapus" jika Anda telah yakin untuk menghapus komentar ini.</p>
            <p>Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
            <a href="/delete-comment/<?= $c['CommentID']?>" class="btn btn-danger">Hapus</a>
        </div></div></div>  
</div>
<?php $i++; ?><?php endforeach; ?>
<?php endif; ?>
</tbody>
</table>

<!-- Pagination -->
<?= $pager->links('comment', 'pager'); ?>
</div>


<?= $this->endSection()?>