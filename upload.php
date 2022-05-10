<?php
 
$uploadDir = '/uploads';
 
file_put_contents("./log.txt",$uploadDir);

if (!empty($_FILES)) {
 $tmpFile = $_FILES['file']['tmp_name'];
 $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];
 move_uploaded_file($tmpFile,$filename);
}
  
?>