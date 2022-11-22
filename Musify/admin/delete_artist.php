<?php

$artist_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM artist WHERE artist_id = {$artist_id}";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: artist.php");

mysqli_close($conn);

?>