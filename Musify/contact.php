<?php



include 'config.php';


if (isset($_POST['submit'])) {

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$mymessage = mysqli_real_escape_string($conn, $_POST['message']);


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
	} else if (empty($mymessage)) {
		$message2[] = "Message is Mandatory";
	} else {

 
	$insert= mysqli_query($conn, "INSERT INTO `contact us`(`cont_name`, `cont_email`, `cont_phone`, `message`) VALUES ('$name','$email','$phone','$mymessage')") or die('query failed');


	if($insert == TRUE) {
		$message[] = 'Thamks For Contacting!';
	} else {
		echo '<script>alert("FAILED") </script>';
	}

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Musify | Contact us</title>
	<!-- Description, Keywords and Author -->
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your,Keywords">
	<meta name="author" content="HimanshuGupta">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Styles -->
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">	
	<!-- Animate CSS -->
	<link href="css/animate.min.css" rel="stylesheet">
	<!-- Basic stylesheet -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- Font awesome CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">		
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-color.css" rel="stylesheet">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/logo/favicon.ico">
<style>
		.message {
		margin: 10px 0;
		width: 30%;
		border-radius: 5px;
		padding: 10px;
		text-align: center;
		background-color: red;
		color: white;
		font-size: 1.8rem;
	}
	.message2 {
			color: red;
			font-weight:800;
			font-size:1.8rem;
		}
</style>
</head>

<body>


		<!-- header-start -->
		<?php include "header.php"; ?>
		<!-- header-end -->


    <!-- contact -->
			<div class="contact pad" id="contact">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Contact Us</h2>
					</div>
					<div class="row">	
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-street-view"></i>
								<!-- contact details  -->
								<span class="contact-details">North Nazimabad Karachi.</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-wifi"></i>
								<!-- contact details  -->
								<span class="contact-details">office@musify.com</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-phone"></i>
								<!-- contact details  -->
								<span class="contact-details">555 444 333</span>
							</div>
						</div>
					</div>
					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>Can’t find the solution you’re looking for? &nbsp; Here’s how to get help from our experts.</p>
<br><br>
						<?php
					if (isset($message)) {
						foreach ($message as $message) {
							echo '<span class="message">' . $message . '</span>';
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
					


						<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="contactForm" method="post">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="message">&nbsp;&nbsp;&nbsp; Message</label>
										<textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message"></textarea>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button name="submit" type="submit" class="btn btn-lg btn-theme">Send Message</button>
							</div>
						</form>
												
					</div>

				</div>
			</div>
			<!-- contact end -->

			<!-- footer-start -->
			<?php include "footer.php"; ?>	
			<!-- footer-end -->




</body>
</html>