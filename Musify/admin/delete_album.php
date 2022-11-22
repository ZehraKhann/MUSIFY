<?php

$album_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM album WHERE album_id = {$album_id}";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: album.php");

mysqli_close($conn);

?>