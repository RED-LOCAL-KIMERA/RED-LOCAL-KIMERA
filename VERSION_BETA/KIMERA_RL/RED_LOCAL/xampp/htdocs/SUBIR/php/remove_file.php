<?php 
if(isset($_POST['file'])){
    $file = '../../../VERSION_EDUCATIVA/' . $_POST['file'];
    if(file_exists($file)){
        unlink($file);
    }
}
?>