<?php

if(isset($_POST['add'])){
    $singer = $_POST['singer'];
    $artist_name = $_POST['artist_name'];
    $song_name = $_POST['song_name'];
    $genre = $_POST['genre'];
    $rel = $_POST['rel'];
    $audio_song_name = $_FILES['audio_song']['name'];
    $audio_size = $_FILES['audio_song']['size'];
    $tmp_name = $_FILES['audio_song']['tmp_name'];
    $file_type = $_FILES['audio_song']['type'];
    $video_song_name = $_FILES['video_song']['name'];
    $video_size = $_FILES['video_song']['size'];
    $tmp_name_1 = $_FILES['video_song']['tmp_name'];
    $file_type_1 = $_FILES['video_song']['type'];

    move_uploaded_file($tmp_name,"audio/".$audio_song_name);
    move_uploaded_file($tmp_name_1,"video/".$video_song_name);

    include 'config.php';
        $sql = "INSERT INTO song(song_name,singer_name,audio_song,genre,realesed_date,video_song,artist_id) VALUES ('{$song_name}','{$singer}','{$audio_song_name}','{$genre}','{$rel}','{$video_song_name}','{$artist_name}')";

        $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
    
       header("Location: song.php");
        mysqli_close($conn);
}


?>