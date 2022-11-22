
<!-- REGISTERATION FORM -->

<?php

include 'Musify/config.php';

// ===
if (isset($_POST['submit'])) {

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$pass = mysqli_real_escape_string($conn, md5($_POST['password']));
	$cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
	$image = $_FILES['image']['name'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
	$image_folder = 'Musify/img/user/' . $image;

	$message2[] = "";
	

	if (empty($name)) {
		$message2[] = "Name is Mandatory";
	} else if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
		$message2[] = "Only letters allowed";
	} else if (empty($email)) {
		$message2[] = "Email is Mandatory";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message2[] = "Invalid Email Format";
	} else if (empty($phone)) {
		$message2[] = "Phone No. is Mandatory";
	} else if (preg_match('/^[0-9]{10}+$/', $phone)) {
		$message2[] = "Invalid Phone Number";
	} else if (empty($address)) {
		$message2[] = "Address is Mandatory";
	} else if (empty($pass)) {
		$message2[] = "Password is Mandatory";
	} else {

		$select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND name = '$name'") or die('query failed');

		if (mysqli_num_rows($select) > 0) {
			$message[] = 'User Already Exist';
		} else {
			if ($pass != $cpass) {
				$message[] = 'Confirm Password Not Matched!';
			} elseif ($image_size > 2000000) {
				$message[] = 'Image size is too large!';
			} else {
				$insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, phone_no, address, password, image) VALUES('$name', '$email', '$phone', '$address', '$pass', '$image')") or die('query failed');

				if ($insert) {
					move_uploaded_file($image_tmp_name, $image_folder);
					$message[] = 'Registered successfully!';
					// header('location:login.php');
				} else {
					$message[] = 'Registeration Failed!';
				}
			}
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
    <title>Register</title>

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
                    <h2 class="title">Registration Here,</h2>
                   
                    <form role="form" id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="post" enctype="multipart/form-data">
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
		
		<br><br>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Enter Your Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="Enter Your Email" name="email">
                        </div>
						<div class="input-group">
                            <input class="input--style-2" min="10" max="12" type="text" placeholder="Enter Your Phone" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" min="10" max="12" type="text" placeholder="Enter Your Address" name="address">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Enter Your Password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Enter Your Confirm Password" name="cpassword">
                        </div>

                        <div class="input-group">
                            <input type="file" name="image" class="" accept="image/jpg, image/jpeg, image/png">
                        </div>

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" name="submit" type="submit">REGISTER</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="title">Or do you have an Account?</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn--radius btn--green" href="index.php" style="text-decoration: none;">LOGIN</a>
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