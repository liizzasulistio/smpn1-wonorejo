<!doctype html>
<html lang="id"> <!-- Bahasa yg digunakan pada website ini -->

    <!-- Header -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS baru untuk overwrite CSS dari bootstrap -->
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css'); ?>">

        <!-- Deklarasi Font -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- font Roboto untuk judul setiap halaman navbar -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
        <!-- font roboto untuk detial artikel -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
        <!-- font pairflay untuk keterangan dari judul setiap halaman navbar -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 

        <!-- Deklarasi Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Judul Halaman</title> <!-- Nanti diganti berdasarkan dengan halaman yg sedang dibuka -->

        <style>
            .top-bar {
                background: #084177;
            }

            .menu-bar {
                background: #084177;
            }

            .dropdown-item {
                font-weight: bold;
            }

            footer {
                background: #084177;
                padding: 20px;
            }
        </style>
    </head>

    <!-- Body -->
    <body>
        
    <!-- Digunakan untuk render navbar dan konten dari website nantinya -->
    <?= $this->include('layout/navbar'); ?>
    <img src="images/img_full.png" class="img-fluid" alt="SMPN 1 Wonorejo" style="width: 100%; height:400px; object-fit: fill;">
    <?= $this->renderSection('content'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <footer class="pt-5 mt-5 text-white">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/logo.png" alt="SMPN 1 Wonorejo" width="60" height="60" style="border-radius: 100px;">
                    <medium class="d-block mt-2"><b>SMP NEGERI 1 WONOREJO</b></medium>
                    <p class="text-small">Unggul Dalam Prestasi, Beriman Dan Bertakwa, Berkarakter dan Berbudaya Lingkungan</p>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled text-small">
                        <h6><b>Hubungi Kami</b></h6>
                        <li>Jalan Raya Sambisirah No. 12</li>
                        <li><a class="text-decoration-none" href="#" style="color:white; text-decoration: none;">smpnwonorejokabpasuruan@gmail.com</a></li>
                        <li><a class="text-decoration-none" href="#" style="color:white; text-decoration: none;">0343-4505959</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><b>Temukan Kami</b></h6>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-decoration-none" href="#" style="color:white; text-decoration: none;">social media</a></li>
                        <li><a class="text-decoration-none" href="#" style="color:white; text-decoration: none;">social media</a></li>
                        <li><a class="text-decoration-none" href="#" style="color:white; text-decoration: none;">social media</a></li>
                        <li><a class="text-decoration-none" href="#" style="color:white; text-decoration: none;">social media</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><b>SIPENSIL</b></h6>
                    <p><a class="text-decoration-none" href="#" style="color:white; text-decoration: none;">gambar</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col mt-5">
                    <hr>
                    <p class="float-end">
                        <a class="link-secondary" href="#" style="color:white; text-decoration: none;">Back to top</a>
                    </p>
                    <p>Copyright © 2020 - 2021 SMPN 1 WONOREJO All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p><a href="#">Back to top</a></p> -->
    </footer>
    </body>
</html>