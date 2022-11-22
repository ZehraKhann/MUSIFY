<?php

$video_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM featured_video WHERE video_id = {$video_id}";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: featured.php");

mysqli_close($conn);

?>