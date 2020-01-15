<?php
include 'common.php';






if (isset ($_POST['submitForm'])){
    if(isset ($_FILES['file'])){
        $fileType = getFileType($_FILES['file']);

        // Check dir exists 
        checkDir($fileType);

        $uploadFilePath =  UPLOAD_DIR . $fileType. "/" . '-' . $_FILES['file']['name'];
         
        
        

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)) {
            echo '<br><b> file uploaded </b>';
        }
    }
}
