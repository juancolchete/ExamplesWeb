<?php
error_reporting(E_ALL);
$target_dir = ".\uploads\\";
$uploadfile  = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// Check if image file is a actual image or fake image
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
  echo "File uploaded with success\n";
} else {
  echo "Error uploading the file!\n";
}
?>