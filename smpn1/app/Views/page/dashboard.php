<?php use CodeIgniter\I18n\Time;?>
<?= $this->extend('layout/template_dash')?>
<?= $this->section('content')?>

<div class="container mt-2">
<div class="row">
<div class="col">
<h1>Dashboard</h1>
<?= session()->get('UserUsername')?>


</div>


</div>

</div>





<?= $this->endSection()?>