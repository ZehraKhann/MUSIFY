<?php

if(isset($_POST['add'])){
    $album_name = $_POST['album_name'];
    $album_image_name = $_FILES['album_image']['name'];
    $image_size = $_FILES['album_image']['size'];
    $tmp_name = $_FILES['album_image']['tmp_name'];
    $file_type = $_FILES['album_image']['type'];
    

    move_uploaded_file($tmp_name,"img/".$album_image_name);
    

    include 'config.php';
        $sql = "INSERT INTO album(album_name,album_image) VALUES ('{$album_name}','{$album_image_name}')";
        $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
    
       header("Location: album.php");
        mysqli_close($conn);
}



?>