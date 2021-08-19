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
    <?= $this->renderSection('script');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
            function changeImage()
            {
                const image = document.querySelector('.form-control');
                const imagePreview = document.querySelector('.image-preview');
                const imageFile = new FileReader();
                imageFile.readAsDataURL(image.files[0]);
                imageFile.onload = function(e)
                {
                    imagePreview.src = e.target.result;
                }
            }
        </script>
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
</body>


</html>

