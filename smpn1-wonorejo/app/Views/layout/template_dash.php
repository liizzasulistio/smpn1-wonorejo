<!DOCTYPE html>
<html lang="id">
<!-- Bahasa yg digunakan pada website ini -->

<!-- Header -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  

        <!-- Deklarasi Font -->
        <!-- font Roboto untuk judul setiap halaman navbar -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
        <!-- font roboto untuk detail artikel -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
        <!-- font pairflay untuk keterangan dari judul setiap halaman navbar -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 

        <!-- Deklarasi Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title> <?= $title; ?> </title>
        <!-- Menampilkan judul berdasarkan halaman yang sedang dibuka -->


      <!-- CSS baru untuk overwrite CSS dari bootstrap -->
            
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css'); ?>">
    </head>


  <!-- Body -->
  <body>
        
        <!-- Digunakan untuk render navbar dan konten dari website nantinya -->
        <?= $this->include('layout/navbar_dash'); ?>
        <?= $this->renderSection('content'); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
       
        </body>




</html>