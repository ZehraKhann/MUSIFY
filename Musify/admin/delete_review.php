<?php

$review_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM review_table WHERE review_id = {$review_id}";

$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: review.php");

mysqli_close($conn);

?>