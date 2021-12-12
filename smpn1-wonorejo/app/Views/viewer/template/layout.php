<!DOCTYPE html>

<!-- Bahasa yang digunakan pada website ini -->
<html lang="id"> 

<!-- Header -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Deklarasi Font -->
    <!-- Font Roboto untuk judul setiap halaman navbar -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 

    <!-- Font Roboto untuk detail artikel -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 

    <!-- Font Pairflay untuk keterangan dari judul setiap halaman navbar -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 

    <!-- Deklarasi Summernote -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="<?php echo base_url('summernote/summernote-lite.css'); ?>" rel="stylesheet">  
    <script src="<?php echo base_url('summernote/summernote-lite.js'); ?>"></script>

    <!-- Deklarasi Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Menampilkan judul berdasarkan halaman yang sedang dibuka -->
    <title> <?= $title; ?> </title>
    
    <!-- CSS baru untuk overwrite CSS dari bootstrap -->        
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css'); ?>">
</head>

<!-- Body -->
<body>
    <!-- Digunakan untuk render navbar dan konten dari website nantinya -->
    <?= $this->include('viewer/template/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <script>
    $(document).ready(function(){
      $('.summernote').summernote({
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'italic', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', [ 'codeview']],
          ['undo'], ['redo']
        ],
        callbacks: {
 onImageUpload: function(image) {
 editor = $(this);
 uploadImageContent(image[0], editor);
 },
 onMediaDelete : function(target) {
			            deleteImage(target[0].src);
			        }
}
      });
   
      function uploadImageContent(image, editor) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
        url: "<?= base_url('ImageController/uploadImages')?>",
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        success: function(url) {
        var image = $('<img>').attr('src', url);
        $(editor).summernote("insertNode", image[0]);
        },
        error: function(data) {
        console.log(data);
        }
        });
 }

 function deleteImage(src) {
			    $.ajax({
			        data: {src : src},
			        type: "POST",
			        url: "<?php echo base_url('ImageController/deleteImages')?>",
			        cache: false,
			        success: function(response) {
			            console.log(response);
			        }
			    });
			}


          })

    </script>
 <!-- Footer -->
 <footer class="pt-5 mt-5 text-white" style="background: #084177; padding: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?= base_url()?>/icons/logo.png" alt="SMPN 1 Wonorejo" width="60" style="border-radius: 100px;">
                    <medium class="d-block mt-2"><b>SMP NEGERI 1 WONOREJO</b></medium>
                    <p class="text-small">Unggul Dalam Prestasi, Beriman Dan Bertakwa, Berkarakter dan Berbudaya Lingkungan</p>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled text-small">
                        <h6><b>Hubungi Kami</b></h6>
                        <li>
                            <a class="text-decoration-none" href=" https://www.google.com/maps?ll=-7.705856,112.824396&z=14&t=m&hl=id&gl=ID&mapclient=embed&cid=17609452461679107225" target='_blank' style="color:white; text-decoration: none;">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg> -->
                                Jalan Raya Sambisirah No. 12
                            </a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="mailto:smpnwonorejokabpasuruan@gmail.com" target='_blank' style="color:white; text-decoration: none;">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                </svg> -->
                                smpnwonorejokabpasuruan@gmail.com
                            </a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="#" style="color:white; text-decoration: none;">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg> -->
                                0343-4505959
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><b>Temukan Kami</b></h6>
                    <ul class="list-unstyled text-small">
                        <li>
                            <a class="text-decoration-none" href="https://www.facebook.com/SMPN-1-WONOREJO-Pasuruan-296920062180/" target='_blank' style="color:white; text-decoration: none;">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="https://www.instagram.com/smpn1wonorejo/" target='_blank' style="color:white; text-decoration: none;">
                                <!-- <img src="https://img.icons8.com/small/19/ffffff/instagram-new.png"/>  -->
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="https://www.youtube.com/channel/UCzGevyRtrivunqIdMkG4AXw/featured" target='_blank' style="color:white; text-decoration: none;">
                            <!-- <img src="https://img.icons8.com/windows/19/ffffff/youtube-play.png"/>  -->
                            Youtube
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><b>SIPENSIL</b></h6>
                    <p>
                        <a class="text-decoration-none" href="https://sipensil.smpn1-wonorejo.sch.id/" style="color:white; text-decoration: none;">
                            <img src="icons/sipensil.png" alt="sipensil" width="200" height="200">
                        </a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col mt-5">
                    <hr>
                    <p class="float-end">
                        <a class="link-secondary" href="#" style="color:white; text-decoration: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
                                <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                            </svg> 
                        </a>
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