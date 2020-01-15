<?php
// upload file
define('UPLOAD_DIR', __DIR__.'/upload-file/');


function arrayNicePrint($array)
{
    if(is_array($array)){
        $i = 0;
        foreach ($array as $key => $value)
        {
            echo "<br> [$i] : [$key] => [$value] <br>";
            $i++;
        }
    } else {
        echo 'No Array!';
    }
    
}

/**
 * Check file type
 * File Type: jpg PNG 
 */

 function getFileType($fileRequest) 
 {
    if(is_file($fileRequest['tmp_name'])){

        $mime = $fileRequest['type'];
        switch($mime){
            case ("image/png");
                return 'png';
                break;
            case ("image/jpeg");
                return "jpeg";
                break;
            case ("image/gif");
                return "gif";
                break;
        }
     }
    //  arrayNicePrint($fileRequest);
 }

 function checkDir($mime)
 {
     $uploadDir = UPLOAD_DIR . $mime;
     if (!file_exists($uploadDir)){
        mkdir($uploadDir);
     }
    
 }