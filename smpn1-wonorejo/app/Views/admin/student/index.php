<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h3>Daftar Siswa</h3>
<br>
<div class="row mb-3">
    <div class="col-8">
        <a href="/admin/siswa/create" class="btn btn-primary mb-2">Tambah</a>
    </div>
    <div class="col-4"><form method="get">
        <div class="input-group">
        <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="keyword">
        <button class="btn btn-primary" type="submit" name="submit">Cari</button>
    </form></div>
    </div>
</div>
<!-- Showing message after CRUD -->
<?php if(session()->getFlashdata('message')) : ?>
  <div class="alert alert-light mt-2" role="alert">
    <?= session()->getFlashdata('message'); ?>
  </div>
<?php endif; ?>
<?php if($student):?>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col" style="text-align: center;">Nama</th>
                <th scope="col" style="text-align: center;">Jenis Kelamin</th>
                <th scope="col" style="text-align: center;">Kelas</th>
                <th scope="col" style="text-align: center;">NamaKelas</th>
            </tr>
        </thead>

        <tbody>   
        <?php $i = 1 + (10 * ($currentPage -1)); ?>
        <?php foreach($student as $st):?>
         
            <tr>
                <th scope="col" style="text-align: center;"><?= $i ?>.</th>
                <td><?= $st['StudentName'] ?></td>
                <td><?= $st['StudentGender'] ?></td>
                <td><?= $st['StudentClass'] ?></td>
                <td><?= $st['StudentClassName'] ?></td>
                <td style="text-align: center;">
                <a href="/admin/siswa/<?= $st['slug'] ?>" class="btn btn-success">Detail</a>
                </td>
            </tr>

   
                </div>
                </div>
            </div>

    
            <?php $i++; ?> 
   
        <?php endforeach; ?>
        
        </tbody>
        
    </table>
   
    <?php endif; ?>

<!-- Pagination -->
<?= $pager->links('student', 'pager'); ?>

</div>
<?= $this->endSection()?>

