
<!-- LOGIN FORM -->

<?php

include 'Musify/config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
	
   $message2[] = "";
	

	if (empty($email)) {
		$message2[] = "Email is Mandatory";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message2[] = "Invalid Email Format";
	} else if (empty($pass)) {
		$message2[] = "Password is Mandatory";
	} else {
    
 
   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      $_SESSION ["myname"] = $row["name"];
      $_SESSION["theimg"] = $row["image"];
      header('location: Musify/index.php ');
   }else if($select == TRUE) {
    $message[] = 'Incorrect Email or Password!';
}
   else{
      $message[] = 'No Account Created!';
   }
    }
}
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
    <link href="./Musify/form2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./Musify/form2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="./SignupForm/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./SignupForm/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./SignupForm/css/main.css" rel="stylesheet" media="all">

    <!-- Favicon -->
	<link rel="shortcut icon" href="./Musify/img/logo/favicon.ico">
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
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2" style="box-shadow: 0 0 60px black;">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">WELCOME TO <span style="color: darkorange; font-weight: 800; font-size: 2.5rem; font-family: Arial, Helvetica, sans-serif;"> MUSIFY </span><hr></h2>
                    
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
                            <button class="btn btn--radius btn--green" name="submit" type="submit">LOGIN </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="title">Don't have an Account?</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn--radius btn--green" href="register.php" style="text-decoration: none;">REGISTER NOW</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="./vendor/select2/select2.min.js"></script>
    <script src="./vendor/datepicker/moment.min.js"></script>
    <script src="./vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="./js/global.js"></script>

</body>

</html>

