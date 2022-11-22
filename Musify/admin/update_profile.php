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
<?php
         
         if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $filename = $_FILES['image']['name'];
            $file = $_FILES['image']['tmp_name'];
            $size = $_FILES['image']['size'];
            $des = 'img/' . $filename;
            $user_id = $_POST['user_id'];
        
        
            $sql = "UPDATE `admin` SET `adm_name`='$name',`adm_email`='$email',`adm_pass`='$password',`adm_image`='$filename' WHERE id = '$user_id'"; 
            $insert_query = mysqli_query($conn, $sql ) or die('query failed');

            if($insert_query){
               move_uploaded_file($file, $des);
            echo '<script>alert("Updated Successfully! \n Log out to Apply Changes")</script>';
            }
    
        } 
if (isset($_GET['id'])) 
{

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `admin` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['adm_name'];
            $email = $row['adm_email'];
            $image = $row['adm_image'];
            $password  = $row['adm_pass'];           
        } 
?>
            <div class="container-fluid pt-4 px-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">UPDATE ADMIN PROFILE</h6>
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $id; ?>" name="user_id" id="">
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $name?>" aria-describedby="emailHelp" name="name">                           
                                </div>
                               
                                
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email?>" aria-describedby="emailHelp" name="email">
                                   
                                </div>

                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" value="<?php echo $password ?>" aria-describedby="emailHelp" name="password">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input type="file" class="form-control" value="<?php echo $image ?>"id="exampleInputEmail1"aria-describedby="emailHelp" name="image">
                                   
                                </div>
                                
                                <input class="submit btn btn-primary" type="submit" value="UPDATE" name="add"/>
                            </form>
                            
                        </div>
                </div>
                <?php 

} else{ 

    header('Location: dashboard.php');

} 

}
?>             
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