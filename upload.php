<?php
    //if the file in question contains a name and file type...
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
var_dump($_FILES);
    //...declare successful upload, display image in 50% its width...   
    move_uploaded_file($file_tmp,"images/".$file_name);
    echo "<h3>Image Upload Success</h3>";
    echo '<img src="images/'.$file_name.'" style="width:50%">';

    // execute tesseract OCR program, saves into OCR/images directory, output a .txt file of transcribed text 

    echo "<br><h3>OCR after reading</h3><br><pre>";
    
    //text output with consideration of broken file/missing path
    $myfile = fopen("out.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("out.txt"));
    fclose($myfile);
    echo "</pre>";
    }
?>