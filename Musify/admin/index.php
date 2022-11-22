<?php 
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Login</title>
    <!-- Icons font CSS-->
    <link href="../../SignupForm/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../../SignupForm/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../../SignupForm/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../SignupForm/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../SignupForm/css/main.css" rel="stylesheet" media="all">

    <!-- Favicon -->
	<link rel="shortcut icon" href="../img/logo/favicon.ico">
    
    <style>
		.message {
			margin: 10px 0;
			width: 50%;
			border-radius: 5px;
			padding: 10px;
			text-align: center;
			background-color: red;
			color: white;
			font-size: 1.1rem;
		}

		.message2 {
			margin: 10px 0;
			width: 50%;
			border-radius: 5px;
			padding: 1px;
			text-align: center;
			background-color: white;
			color: red;
			font-weight:800;
			font-size: 1.1rem;
		}
	</style>
</head>
<body>


<?php 
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    
    $message2[] = "";
	

	if (empty($email)) {
		$message2[] = "Email is Mandatory";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message2[] = "Invalid Email Format";
	} else if (empty($password)) {
		$message2[] = "Password is Mandatory";
	} else {

    
    $sql ="SELECT * FROM admin WHERE adm_email='$email' AND adm_pass = '$password'";
	   $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION ["myname"] = $row["adm_name"];
            $_SESSION["email"] = $row["adm_email"];
            $_SESSION["password"] = $row["adm_pass"];
            $_SESSION["image"] = $row["adm_image"];
 			if($row['role_id']==1){
                header('location: dashboard.php');
            }
            else{
                $message[] = 'Incorrect Email or Password!';
             }
		   }
		
		}
	}
?>
      <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2" style="box-shadow: 0 0 60px black;">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">WELCOME TO <span style="color: darkorange; font-weight: 800; font-size: 2.0rem; font-family: Arial, Helvetica, sans-serif;"> ADMIN PANEL </span><hr></h2>
                    
                    <br>
                    <h2 class="title">Login Here,</h2>

                    <form action="" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" >

                    <?php
					if (isset($message)) {
						foreach ($message as $message) {
							echo '<div class="message">' . $message . '</div>';
						}
					}
					?>
					


					<?php
					if (isset($message2)) {
						foreach ($message2 as $message2) {
							echo '<span class="message2">' . $message2 . '</span>';
						}
					}
					?>
<br><br><br>
                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Enter Your Password" name="password">
                        </div>
                        
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" name="submit" type="submit">LOGIN </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../../SignupForm/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../../SignupForm/vendor/select2/select2.min.js"></script>
    <script src="../../SignupForm/vendor/datepicker/moment.min.js"></script>
    <script src="../../SignupForm/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../../SignupForm/js/global.js"></script>

</body>

</html>