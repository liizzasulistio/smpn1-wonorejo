<!doctype html>
<html lang="id"> <!-- Bahasa yg digunakan pada website ini -->

    <!-- Header -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS baru untuk overwrite CSS dari bootstrap -->
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Deklarasi Font dan Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Judul Halaman</title> <!-- Nanti diganti berdasarkan dengan halaman yg sedang dibuka -->
    </head>

    <!-- Body -->
    <body>

  

    <!-- Digunakan untuk render navbar dan konten dari website nantinya -->
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Footer -->
    <footer>
    
    
    </footer>

    </body>
</html>