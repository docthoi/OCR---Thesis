<?php 
    $host = "firebird.sheridanc.on.ca";
    $user = "ixd830";
    $pass = "Xab1yomo3";
    $dB = "ixd830_ocr";

    $conn = mysqli_connect($host, $user, $pass, $db)or die("<script> alert('Connection not made!')</script>");
mysql_select_db($dB, $conn) or die("Could not select database");
?>

