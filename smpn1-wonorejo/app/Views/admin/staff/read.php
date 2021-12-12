<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<div class="row">
<<<<<<< HEAD
<div class="card mb-3 shadow-sm">
<div class="card-body">
<h3><?= $staff['StaffName'] ?></h3><hr>
    <div class="row">
        <div class="col-4">
            <?php if($staff['StaffPhoto'] == null): ?>
                <img src="<?= base_url('/images/user.png')?>" class="mx-auto d-block ava-img" style="margin-top:2px; " class="bd-placeholder-img rounded-circle">
            <?php else: ?>
                <img src="<?= base_url('./images/'.$staff['StaffPhoto']) ?>" class="mx-auto d-block ava-img" style="margin-top:2px; " class="bd-placeholder-img rounded-circle">    
            <?php endif; ?>
        </div>
   <div class="col-8">
        <p><?= $staff['StaffNUPTK'] ?></p>
        <p><?= $staff['StaffPosition'] ?></p>
        <p><?= $staff['StaffGender'] ?></p>
   </div></div>
   <div class="row">
       <div class="col"> <p class="d-flex justify-content-between my-3" style="max-width: 100px;"><?= $staff['StaffDesc'] ?></p>
    </div></div>
</div>


<!-- Button -->
<div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end mb-2">
    <a href="/admin/tenaga-kependidikan/update/<?= $staff['slug'] ?>" class="btn btn-warning">Ubah</a>
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteStaff">Hapus</a>      
=======
    <div class="col-md-10 mx-auto">
        <?php if($staff['StaffPhoto'] == null): ?>
        <img src="<?= base_url('/images/user.png')?>" class="mx-auto d-block ava-img" style="margin-top:50px; " class="bd-placeholder-img rounded-circle">
        <?php else: ?>
        <img src="<?= base_url('./images/'.$staff['StaffPhoto']) ?>" class="mx-auto d-block ava-img" style="margin-top:50px; " class="bd-placeholder-img rounded-circle">    
        <?php endif; ?>
        <h3 class="text-center mt-4"><?= $staff['StaffName']?></h3>
        <h4 class="text-center"><?= $staff['StaffPosition']?></h4>
        <p class="d-flex justify-content-between my-3" style="max-width: 100px;">
            <?= $staff['StaffDesc']?>
        </p>
    </div>
</div>

<!-- Button -->
<div class="row">
    <div class="col-6">
        <a href="/admin/tenaga-kependidikan/update/<?= $staff['slug'] ?>" class="btn btn-warning">Ubah</a>
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteStaff">Hapus</a>      

>>>>>>> 8c697b6048a23750b04252eeaa964de8611f154b
    </div>
</div>

 <!-- Delete Modal -->
 <div class="modal fade" id="deleteStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteStaff" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteStaff">Apakah Anda yakin untuk menghapus data tenaga kependidikan ini?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Pilih "Hapus" jika Anda telah yakin untuk menghapus data tenaga kependidikan ini.</p>
            <p>Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
<<<<<<< HEAD
            <a href="/delete-staff/<?= $staff['StaffID']?>" class="btn btn-danger">Hapus</a>
=======
            <a href="/delete-tenaga-kependidikan/<?= $staff['StaffID']?>" class="btn btn-danger">Hapus</a>
>>>>>>> 8c697b6048a23750b04252eeaa964de8611f154b
        </div></div></div>
    </div>
</div>

<?= $this->endSection()?>