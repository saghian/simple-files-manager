<?php
include 'common.php';

// upload file
define('UPLOAD_DIR', __DIR__.'/upload-file/');



if (isset ($_POST['submitForm'])){
    if(isset ($_FILES['file'])){
        $uploadFilePath =  UPLOAD_DIR . '-' . $_FILES['file']['name'];
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)) {
            echo ' file uploaded';
        }
    }
}
