<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "zionacademy";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
          echo 'mali';
      }
?>