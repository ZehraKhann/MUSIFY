<?php

$song_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM song WHERE song_id = {$song_id}";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: song.php");

mysqli_close($conn);

?>