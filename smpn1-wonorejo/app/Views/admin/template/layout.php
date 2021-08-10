<!DOCTYPE html>
<html lang="id">
<!-- Bahasa yg digunakan pada website ini -->

<!-- Header -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Deklarasi Font -->
    <!-- Font Roboto untuk judul setiap halaman sidebar -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
    <!-- Font Roboto untuk detail artikel -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <!-- Font Pairflay untuk keterangan dari judul setiap halaman sidebar -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 

    <!-- Deklarasi Summernote -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="<?php echo base_url('summernote/summernote-lite.css'); ?>" rel="stylesheet">  
    <script src="<?php echo base_url('summernote/summernote-lite.js'); ?>"></script>

    <!-- Deklarasi Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Menampilkan judul berdasarkan halaman yang sedang dibuka -->
    <title> <?= $title; ?> </title> 

    <!-- <link href="echo base_url('summernote-ajax-upload/css/summernote-ext-ajaximageupload.css')?>" rel="stylesheet">
    <script src="echo base_url('summernote-ajax-upload/js/summernote-ext-ajaximageupload.js')?>"></script> -->
        
    <!-- CSS baru untuk overwrite CSS dari bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/sidebars.css'); ?>">
</head>

<!-- Body -->
<body>
    <!-- Digunakan untuk render sidebar dan konten dari website nantinya -->
    <div class="row">
        <div class="col-3">
            <?= $this->include('admin/template/sidebar'); ?>
        </div>
        <div class="col-9 mt-3">
            <?= $this->renderSection('content');?>
        </div>
    </div>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="sidebars.js"></script>
    
    <!-- Digunakan untuk render script yg digunakan pada form -->
    <?= $this->renderSection('script')?>
</body>

</html>

