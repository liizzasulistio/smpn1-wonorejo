<?php namespace App\Controllers;

use Faker\Provider\Base;

class ImageController extends BaseController
{
    public function __construct()
    {
        $this->mRequest = service('request');
    }

    public function uploadImages()
    {
        if ($_FILES['image']['name']) {
            if (!$_FILES['image']['error']) {
               $name = md5(rand(100, 200));
               $ext = explode('.', $_FILES['image']['name']);
               $filename = $name . '.' . $ext[1];
               $destination = 'articles/' . $filename; //change this directory
               $location = $_FILES["image"]["tmp_name"];
               move_uploaded_file($location, $destination);
               echo base_url().'/articles/' . $filename;//change this URL
            }
            else
            {
             echo  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['image']['error'];
            }
           }
    }

    public function deleteImages()
    {
        // $src = $this->input->post('src');
        $src = $this->mRequest->getVar('src');
        $file_name = str_replace(base_url(), '.', $src);
        if(unlink($file_name))
        {
            echo 'File Delete Successfully';
        }
    }
}