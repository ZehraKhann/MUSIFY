<?php

$user_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM user_form WHERE id = '{$user_id}'";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: user.php");

mysqli_close($conn);

?>