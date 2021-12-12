<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<div class="row">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<h3><?= $teacher['TeacherName'] ?></h3><hr>
    <div class="row">
        <div class="col-4">
            <?php if($teacher['TeacherPhoto'] == null): ?>
                <img src="<?= base_url('/images/user.png')?>" class="mx-auto d-block ava-img" style="margin-top:2px; " class="bd-placeholder-img rounded-circle">
            <?php else: ?>
                <img src="<?= base_url('./images/'.$teacher['TeacherPhoto']) ?>" class="mx-auto d-block ava-img" style="margin-top:2px; " class="bd-placeholder-img rounded-circle">    
            <?php endif; ?>
        </div>
   <div class="col-8">
        <p><?= $teacher['TeacherNIP'] ?></p>
        <p><?= $teacher['TeacherSubject'] ?></p>
        <p><?= $teacher['TeacherGender'] ?></p>
   </div></div>
   <div class="row">
       <div class="col"> <p class="d-flex justify-content-between my-3" style="max-width: 100px;"><?= $teacher['TeacherDesc'] ?></p>
    </div></div>
</div>


<!-- Button -->
<div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end mb-2">
    <a href="/admin/tenaga-pendidik/update/<?= $teacher['slug'] ?>" class="btn btn-warning">Ubah</a>
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteGuru">Hapus</a>      
    </div>
</div>

 <!-- Delete Modal -->
 <div class="modal fade" id="deleteGuru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteGuru" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteGuru">Apakah Anda yakin untuk menghapus data tenaga pendidik ini?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Pilih "Hapus" jika Anda telah yakin untuk menghapus data tenaga pendidik ini.</p>
            <p>Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
            <a href="/delete-teacher/<?= $teacher['TeacherID']?>" class="btn btn-danger">Hapus</a>
        </div></div></div>
    </div>
</div>

<?= $this->endSection()?>