<!-- Template -->
<?= $this->extend('viewer/template/layout') ?>
<?= $this->section('content') ?>

<div class="mb-5 mt-5">
    <div class="container text-center">
        <h2 style="font-family: 'Roboto', sans-serif;" class="mt-5"><b> DAFTAR SISWA </b></h2>
        <hr style="width: 10%; margin:auto; height:3px; color:#084177;">
    </div>
</div>
<!-- 
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">A</a></li>
    <li><a class="dropdown-item" href="#">B</a></li>
    <li><a class="dropdown-item" href="#">C/a></li>
    <li><a class="dropdown-item" href="#">D/a></li>
    <li><a class="dropdown-item" href="#">E/a></li>
    <li><a class="dropdown-item" href="#">F/a></li>
  </ul>
</div> -->

<?php if($student):?>
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col" style="text-align: center;">Nama</th>
                <th scope="col" style="text-align: center;">Jenis Kelamin</th>
                <th scope="col" style="text-align: center;">Kelas</th>
                <th scope="col" style="text-align: center;">NamaKelas</th>
                </tr>
            </thead>
            <tbody>
      
            <?php foreach($student as $st):?>
                <tr>
                    <th scope="col" style="text-align: center;">1</th>
                    <td><?= $st['StudentName'] ?></td>
                    <td><?= $st['StudentGender'] ?></td>
                    <td><?= $st['StudentClass'] ?></td>
                    <td><?= $st['StudentClassName'] ?></td>
                </tr>
            
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>


<?= $this->endSection() ?>