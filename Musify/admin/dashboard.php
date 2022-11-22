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

           



             <!-- User Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">User</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">S No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Phone No.</th>
                                    <th scope="col">Address</th>
                                    <th scope="col"></th>
                                    
                                </tr>
                            </thead>

                            <?php
                            include 'config.php';
                            
                            $sql = "SELECT * FROM user_form";
                            $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
                            if(mysqli_num_rows($result) > 0){

                            ?>
                            <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>   
                                <tr>
                                    
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['password'] ?></td>
                                    <td><img class="img-fluid img-thumbnail" src="<?php echo '../img/user/'.$row['image']?>"></td>
                                    <td><?php echo $row['phone_no'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><a class="btn btn-sm btn-primary" href='delete_user.php?id=<?php echo $row['id'] ?>'>Delete</a></td>
                                </tr>
                              
                                <?php } ?>
                            </tbody>
                            <?php }
                    else{
                    echo "<h4>No result found</h4>";
                    }
                    mysqli_close($conn);
                    ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- User End -->



           <!-- Album Start -->
           <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Albums</h6>
                        <a href="">Show All</a>
                        

                    </div>
                    <div class="table-responsive">

                    
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                            
                                <tr class="text-white">
                                    
                                    <th scope="col">S No.</th>
                                    <th scope="col">Album Name</th>
                                    <th scope="col">Artist</th> 
                                   
                                    
                                    
                                </tr>
                            </thead>

                    <?php
                       include 'config.php';
                       $sql = "SELECT * FROM song";
                       $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
                       if(mysqli_num_rows($result) > 0){

                    ?>
                            <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>               
                                <tr>
                                        
                                    <td><?php echo $row['song_id'] ?></td>
                                    <td><?php echo $row['song_name'] ?></td>                                 
                                    <td><?php echo $row['singer_name']?></td>
                                    
                                </tr>
                                <?php } ?>
                            </tbody>

                    <?php }
                    else{
                    echo "<h4>No result found</h4>";
                    }
                    mysqli_close($conn);
                    ?>
                        </table>
                    
                    </div>
                </div>
            </div>
            <!-- Album End -->

   <!-- Review Start -->
   <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Reviews</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">S No.</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Review</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM review_table";
                            $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
                            if(mysqli_num_rows($result) > 0){
                            ?>
                            <tbody>
                            <?php
                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                <tr>
                                   
                                    <td><?php echo $row['review_id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['rating'] ?></td>
                                    <td><?php echo $row['review'] ?></td>
                                    
                                    <td><a class="btn btn-sm btn-primary" href='delete_review.php?id=<?php echo $row['review_id'] ?>'>DELETE</a></td>
                                    
                                </tr>
                                <?php } ?>
                             </tbody>
                             <?php }
                            else{
                            echo "<h4>No result found</h4>";
                            }
                            mysqli_close($conn);
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Review End -->


        
        
           <!-- Artist Start -->
           <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Artists</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">S No.</th>
                                    <th scope="col">Artist Name</th>
                                    
                                </tr>
                            </thead>
                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM artist";
                            $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
                            if(mysqli_num_rows($result) > 0){
                            ?>
                            <tbody>
                            <?php
                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                <tr>
                                   
                                    <td><?php echo $row['artist_id'] ?></td>
                                    <td><?php echo $row['artist_name'] ?></td>
                                    
                                </tr>
                                <?php } ?>
                             </tbody>
                             <?php }
                            else{
                            echo "<h4>No result found</h4>";
                            }
                            mysqli_close($conn);
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Artist End -->

        
            
            
            
            <!-- Songs Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Songs</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">S No.</th>
                                    <th scope="col">Song Name</th>
                                    <th scope="col">Song Artist</th>
                                    <th scope="col">Audio Song</th>
                                    <th scope="col">Video Song</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Released Date</th>
                                    <th scope="col">Action</th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM song";
                            $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
                            if(mysqli_num_rows($result) > 0){
                            ?>
                                <tr>
                                    <?php
                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                     <td><?php echo $row['song_id'] ?></td>
                                     <td><?php echo $row['song_name'] ?></td>
                                     <td><?php echo $row['singer_name'] ?></td>
                                     <td>
                                     <audio style="width: 16rem; height: 2rem;" controls>
                                        <source src="<?php echo 'audio/'.$row['audio_song']?>" type="audio/ogg">
                                     </audio>
                                     </td>
                                     <td>
                                     <video width="160" height="110" controls>
                                        <source src="<?php echo 'video/'.$row['video_song']?>" type="video/mp4">
                                     </video>
                                     </td>
                                     <td><?php echo $row['genre'] ?></td>                                     
                                     <td><?php echo $row['realesed_date'] ?></td>   
                                     <td><a class="btn btn-sm btn-primary" href='delete_song.php?id=<?php echo $row['song_id'] ?>'>DELETE</a></td>                                 
                                
                                     
                                    
                                    
                                </tr>
                                <?php } ?>
                             </tbody>
                             <?php }
                            else{
                            echo "<h4>No result found</h4>";
                            }
                            mysqli_close($conn);
                            ?>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Songs End -->



             <!-- Featured Song Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Featured Audio Songs</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">Song No.</th>
                                    <th scope="col">Song Name</th>
                                    <th scope="col">Audio </th>
                                    <th scope="col">Genres</th>
                                    <th scope="col">Singer</th>
                                    <th scope="col">ACTION</th>
                                    
                                </tr>
                            </thead>

                            <?php
                            include 'config.php';
                            
                            $sql = "SELECT * FROM featured_song";
                            $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
                            if(mysqli_num_rows($result) > 0){

                            ?>
                            <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>   
                                <tr>
                                    
                                    <td><?php echo $row['song_id'] ?></td>
                                    <td><?php echo $row['song_name'] ?></td>
                                    <td>
                                        <audio style="width: 26rem; height: 2rem;" controls="">
                                        	<source src="../admin/featured/<?php echo $row['audio_url']; ?>" type="audio/ogg">
                                     	</audio>
                                    </td>
                                    <td><?php echo $row['genres'] ?></td>
                                    <td><?php echo $row['singer'] ?></td>
                                  
                                    <td><a class="btn btn-sm btn-primary" href='delete_featured_audio.php?id=<?php echo $row['song_id'] ?>'>Delete</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <?php }
                    else{
                    echo "<h4>No result found</h4>";
                    }
                    mysqli_close($conn);
                    ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- feautured song End -->



                <br><br><br><br>



           <!-- video Start -->
           <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Featured Video Song</h6>
                        <a href="">Show All</a>
                        

                    </div>
                    <div class="table-responsive">

                    
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                            
                                <tr class="text-white">
                                    
                                    <th scope="col">V No.</th>
                                    <th scope="col">Song Name</th>
                                    <th scope="col">Video</th> 
                                    <th scope="col">Singer</th>  
                                    <th scope="col">ACTION</th> 
                                    
                                </tr>
                            </thead>

                    <?php
                       include 'config.php';
                       $sql = "SELECT * FROM featured_video";
                       $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
                       if(mysqli_num_rows($result) > 0){

                    ?>
                            <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>               
                                <tr>
                                        
                                    <td><?php echo $row['video_id'] ?></td>
                                    <td><?php echo $row['video_name'] ?></td>                                 
                                    <td>
                                    <video width="200" height="110" controls>
                                        <source src="<?php echo '../admin/featured/'.$row['video_url']?>" type="video/mp4">
                                     </video>
                                    </td>
                                    <td><?php echo $row['singer'] ?></td>
                                    <td>
                                    <a class="btn btn-sm btn-primary" href='delete_featured_video.php?id=<?php echo $row['video_id'] ?>'>Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>

                    <?php }
                    else{
                    echo "<h4>No result found</h4>";
                    }
                    mysqli_close($conn);
                    ?>
                        </table>
                    
                    </div>
                </div>
            </div>
            <!-- video End -->

        



            


            

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