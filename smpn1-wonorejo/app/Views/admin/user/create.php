<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<h3>Buat Pengguna</h3>
<div class="container">
    <form action="/save-user" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>  
    <!-- 
        UserID - hidden, integer
        UserName
        UserUsername
        UserEmail
        UserPassword + confirm password
        UserRole
    -->

    <div class="row">
        <div class="form-group mb-1 col-6">
            <label for="UserName">Nama</label>
            <input type="text" class="form-control" name="UserName" id="UserName" value="<?= old('UserName')?>" autofocus>
            <span class="text-danger"><?= $validation->getError('UserName'); ?></span>
        </div>

        <div class="form-group mb-1 col-6">
            <label for="UserRole">Role</label>
            <select class="form-select" name="UserRole" id="UserRole"> 
                <option value="<?='Admin'?>">Admin</option>
                <option value="<?='Penulis'?>">Penulis</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="form-group mb-1 col-6">
            <label for="UserUsername">Username</label>
            <input type="text" class="form-control" name="UserUsername" id="UserUsername" value="<?= old('UserUsername')?>">
            <span class="text-danger"><?= $validation->getError('UserUsername'); ?></span>
        </div>

        <div class="form-group mb-1 col-6">
            <label for="UserEmail">E-mail</label>
            <input type="text" class="form-control" name="UserEmail" id="UserEmail" value="<?= old('UserEmail')?>">
            <span class="text-danger"><?= $validation->getError('UserEmail'); ?></span>
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

    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

    </form>
</div>


<?= $this->endSection()?>
