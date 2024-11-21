<?php
session_start();
require 'conn.php';
if(isset($_POST['heading'])){
    $text = $_POST['row1'];
    $id = $_POST['id'];
    $sql = "UPDATE home SET text='$text' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: admin.php');
    }
}
if(isset($_POST['heading2'])){
    $text = $_POST['row2'];
    $id = $_POST['id'];
    $sql = "UPDATE home SET text='$text' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: admin.php');
    }
}
if(isset($_POST['course'])){
    $course = $_POST['coursetext'];
    $text= $_POST['text'];
    $sql = "INSERT INTO `services`(`id`, `course`, `text`, `date`) VALUES ('','$course','$text',NOW())";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: admin.php');
    }else{
        echo mysqli_error($conn);
    }
}
if(isset($_POST['dateSub'])){
    $date = $_POST['date'];
    $text = $_POST['text'];
    $sql = "INSERT INTO `calendar`(`id`, `content`, `date`) VALUES ('','$text','$date')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: admin.php');
    }else{
        echo mysqli_error($conn);
    }
}
if(isset($_POST['enroll'])){
    $id = $_POST['id'];
    $header = $_POST['header'];
    $body = $_POST['body'];
    $footer = $_POST['footer'];
    $sql = "UPDATE enrollment SET header='$header', body='$body', footer='$footer' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: admin.php');
    }
}
?>