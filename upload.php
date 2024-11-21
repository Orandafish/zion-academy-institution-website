<?php
session_start();
require 'conn.php';
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $id = $_POST['id'];
  $file = $_FILES['fileToUpload'];
  $fileName = $file['name'];
  $content = $_POST['content'];
  $title = $_POST['title'];
  $sql = "UPDATE news SET picture='$fileName', title='$title', summary='nah', content='$content' WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
if(isset($_POST['upload'])){
  $file = $_FILES['fileToUpload'];
  $fileName = $file['name'];
  $content = $_POST['content'];
  $title = $_POST['title'];
  $sql = "INSERT INTO `news`(`id`, `picture`, `title`, `summary`, `content`, `date`) VALUES ('','$fileName','$title','nah','$content',now())";
  $result = mysqli_query($conn, $sql);
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
if(isset($_POST['upload2'])){
  $file = $_FILES['fileToUpload'];
  $fileName = $file['name'];
  $imgPrev = $_POST['filePrev'];
  $sql = "UPDATE pics SET picture='$fileName' WHERE id=$imgPrev";
  $result = mysqli_query($conn, $sql);
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
if(isset($_POST['upload3'])){
  $file = $_FILES['fileToUpload'];
  $fileName = $file['name'];
  $content = $_POST['content'];
  $sql = "UPDATE home SET name='birthday', type='$fileName', text='$content' WHERE id= 8";
  $result = mysqli_query($conn, $sql);
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
header('location: admin.php');
?>