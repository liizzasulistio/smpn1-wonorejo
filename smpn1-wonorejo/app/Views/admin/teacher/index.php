<!-- Template -->
<?= $this->extend('admin/template/layout')?>
<?= $this->section('content')?>

<div class="container">
<h3>Tenaga Pendidik</h3>
    <br>
    <a href="/tenaga-pendidik/create" class="btn btn-primary mb-2">Tambah</a>


<?php if($tenagaPendidik):?>
<?php $i = 1; ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($tenagaPendidik as $tp):?>
            <tr>
                <th scope="col"><?= $i ?></th>
                <td><?= $tp['TeacherNIP'] ?></td>
                <td><?= $tp['TeacherName'] ?></td>
                <td><?= $tp['TeacherSubject'] ?></td>
                <td>
                <a href="/update-guru/<?= $tp['slug'] ?>" class="btn btn-success">Detail</a>
               
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



</div>
<?= $this->endSection()?>