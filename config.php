<?php 
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $dB = "ocr";

    $conn = mysqli_connect($host, $user, $pass, $db)or die("<script> alert('Connection not made!')</script>");
mysql_select_db($dB, $conn) or die("Could not select database");
?>

