<?php

if(isset($_POST['add'])){
    $artist_name = $_POST['artist_name'];
    $category = $_POST['category'];
    $image_name = $_FILES['art_image']['name'];
    $image_size = $_FILES['art_image']['size'];
    $tmp_name = $_FILES['art_image']['tmp_name'];
    $file_type = $_FILES['art_image']['type'];

    move_uploaded_file($tmp_name,"../img/artist/" .$image_name);


    include 'config.php';
        $sql = "INSERT INTO `artist`(`artist_name`, `cat_id`, `image`) VALUES ('{$artist_name}','{$category}' ,'{$image_name}')";

 
        $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
    
       header("Location: artist.php");
        mysqli_close($conn);
}
?>
