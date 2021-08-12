<!DOCTYPE html>

<!-- Bahasa yg digunakan pada website ini -->
<html lang="id">

<!-- Header -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Deklarasi Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- Menampilkan judul berdasarkan halaman yang sedang dibuka -->
    <title> <?= $title; ?> </title>

    <!-- CSS baru untuk overwrite CSS dari bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css'); ?>">
</head>

<!-- Body -->
<body> 

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <div class="container mt-5">
        <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
        <div class="container">

        <div style="text-align: center">
            <img src="images/logo.png" alt="SMPN 1 Wonorejo" width="20%" height="20%">
            <b><h3>SMPN 1 WONOREJO</h3></b>
            <h5>Unggul dalam Prestasi, Beriman dan Bertakwa, Berkarakter dan Berbudaya Lingkungan</h5>
        </div><hr>

        <form action="/login" method="post">
            <div class="form-floating mb-3">
                
                <input type="text" class="form-control" name="UserUsername" value="<?= set_value('UserUsername')?>" autofocus>
                <label for="floatingInput">Username</label>
            </div>
    
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="UserPassword" value="<?= set_value('UserPassword')?>">
                <label for="floatingInput">Password</label>
            </div>


            <div class="row">
                    <div class="center">
                        <a href="#">Forgot password?</a> |
                        Back to <a href="/">SMPN 1 Wonorejo</a>
                    </div>
                    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
            </div>
            
    
        </form>


        


        
        </div>
        
        
        
        </div></div>
    
    </div>



</body>
</html>