<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<div class="row">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<h3><?= $facility['FacilityName'] ?></h3><hr>
    <div class="row" style="max-height: 400px; overflow: hidden;">
         <?php if($facility['FacilityImage'] == null): ?>
                <img src="<?= base_url('/images/school.jpg')?>" class="mx-auto d-block" style="margin-top:2px; " class="bd-placeholder-img rounded-circle">
         <?php else: ?>
                <img src="<?= base_url('./images/'.$facility['FacilityImage']) ?>" class="mx-auto d-block" style="margin-top:2px; " class="bd-placeholder-img rounded-circle">    
        <?php endif; ?></div>

    <div class="row mt-2">
        <p class="d-flex justify-content-between my-3" style="max-width: 100px;"><?= $facility['FacilityDesc'] ?></p>
    </div>
</div>


<!-- Button -->
<div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end mb-2">
    <a href="/admin/fasilitas/update/<?= $facility['FacilityID'] ?>" class="btn btn-warning">Ubah</a>
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteActivity">Hapus</a>      
    </div>
</div>

 <!-- Delete Modal -->
 <div class="modal fade" id="deleteActivity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteActivity" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteActivity">Apakah Anda yakin untuk menghapus artikel ini?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Pilih "Hapus" jika Anda telah yakin untuk menghapus artikel ini.</p>
            <p>Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
            <a href="/delete-facility/<?= $facility['FacilityID']?>" class="btn btn-danger">Hapus</a>
        </div></div></div>
    </div>
</div>

<?= $this->endSection()?>