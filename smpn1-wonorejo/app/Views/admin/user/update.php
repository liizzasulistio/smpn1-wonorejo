<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h2><strong>Ubah Data Tenaga Pendidik</strong></h2>
<hr class="my-3">

<div class="row">
<div class="col">
<div class="card mb-3 shadow-sm">
<div class="card-body">
<form action="/save-user-update/<?= $user['UserID']?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="UserUsername" value="<?= $user['UserUsername']?>">
    <div class="row">


    <div class="row">
        <div class="form-group mb-1 col-6">
            <label for="UserName">Nama</label>
            <input type="text" class="form-control  <?= ($validation->hasError('UserName')) ? 'is-invalid' : ''; ?>" name="UserName" id="UserName" value="<?= set_value('UserName', $user['UserName']) ?>" autofocus>
            <span class="text-danger"><?= $validation->getError('UserName'); ?></span>
        </div>

        <div class="form-group mb-1 col-6">
            <label for="UserUsername">Username</label>
            <input type="text" class="form-control  <?= ($validation->hasError('UserUsername')) ? 'is-invalid' : ''; ?>" name="UserUsername" id="UserUsername" value="<?= set_value('UserUsername', $user['UserUsername']) ?>">
            <span class="text-danger"><?= $validation->getError('UserUsername'); ?></span>
        </div>
    </div>

    <div class="row">
        <div class="form-group mb-1 col-6">
            <label for="UserPassword">Kata Sandi</label>
            <input type="password" class="form-control" name="UserPassword" id="UserPassword">
            <span class="text-danger"><?= $validation->getError('UserPassword'); ?></span>
        </div>

        <div class="form-group mb-1 col-6">
            <label for="PasswordConfirm">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" name="PasswordConfirm" id="PasswordConfirm">
            <span class="text-danger"><?= $validation->getError('PasswordConfirm'); ?></span>
        </div>
    </div>

    <div class="form-group mb-1 mt-2">
        <label for="UserRole">Status</label>
            <label><input type="radio" name="UserRole" value="Admin" <?php echo ($user['UserRole'] == 'Admin' ? ' checked' : ''); ?>> Admin</label>
            <label><input type="radio" name="UserRole" value="Penulis" <?php echo ($user['UserRole'] == 'Penulis' ? ' checked' : ''); ?>> Penulis</label>
        <div class="invalid-feedback">
            <?= $validation->getError('UserRole'); ?>
        </div>
    </div>

    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
</form>
</div></div></div>
<?= $this->endSection()?>