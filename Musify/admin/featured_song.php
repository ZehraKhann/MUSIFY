<?php

if(isset($_POST['add'])){
    $song_name = $_POST['song_name'];
    $genre = $_POST['genre'];
    $singer = $_POST['singer'];
    $audio_song_name = $_FILES['audio_song']['name'];
    $audio_size = $_FILES['audio_song']['size'];
    $tmp_name = $_FILES['audio_song']['tmp_name'];
    $file_type = $_FILES['audio_song']['type'];

    move_uploaded_file($tmp_name,"featured/" .$audio_song_name);
 
    include 'config.php';
        $sql = "INSERT INTO `featured_song`(`audio_url`, `song_name`, `genres`, `singer`) VALUES ('$audio_song_name','$song_name','$genre','$singer')";
        $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
    
       header("Location: featured_song.php");
        mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="utf-8">
    <title>Musify | Admin </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/logo/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<?php include "admin_header.php"; ?>


            <!-- Add album Start -->


            <div class="container-fluid pt-4 px-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            
                        
                            <h6 class="mb-4">Add Featured Songs</h6>
                            <form action="" method="POST" enctype="multipart/form-data">
                                
                        <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Audio Song</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="audio_song">
                                
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Song Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="song_name">                                   
                            </div>
                        
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Song Genre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="genre">       
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Singer</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="singer">       
                            </div>
                             
                                
                                <input class="submit btn btn-primary" type="submit" value="ADD" name="add"/>
                            </form>
                            
                        </div>
                </div>
                
            <!-- Add album End -->



            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#"><strong> Musify</strong></a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                       
                            Designed By <a href="#">Humza || Zehra</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>