<?php
if(isset($_POST['add'])){
    $artist_id = $_POST['artist_id'];
    $artist_name = $_POST['artist_name'];
    
    include 'config.php';
    $sql = "UPDATE  artist SET artist_name = '{$artist_name}' WHERE artist_id = '{$artist_id}'";
    $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");

    header("Location: artist.php");
    mysqli_close($conn);
}

?>