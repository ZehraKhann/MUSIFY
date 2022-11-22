<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Melodi</title>
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
	</head>

<body>
    			<!-- header area -->
			<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<?php
						session_start();

								     include 'config.php';
                            
									 $sql = "SELECT * FROM user_form ";
									 $query = mysqli_query($conn , $sql);
									 $row = mysqli_fetch_assoc($query);
									 $pass = $row['name'];
									 $image = $row['image'];
									 $id = $row['id']; ?>
									 
						<div class="sm-left">							
							<strong>Phone</strong>:&nbsp; <a href="#">555 666 222</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">Musify@musify.com</a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Welcome</strong>:&nbsp; <a href="#" style="font-size:2.4rem; color:darkorange; font-weight:bolder;">&nbsp;<?php echo $_SESSION ['myname']; ?></a><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<img style="height: 3rem; border-radius: 25px; margin-top: -5px;" src="img/user/<?php echo $_SESSION ['theimg']; ?>" alt=""></a>
						</div>

						
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								
								<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<!-- logo area -->
							<a class="navbar-brand" href="index.php">
								<!-- logo image -->
								<img class="img-responsive" src="img/logo/logo2.png" alt="" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="categories.php">Categories</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="#events"></a></li>
								<li><a href="#portfolio"></a></li>
								<li><a href="#portfolio"></a></li>
								<li><a href="#portfolio"></a></li>
								<li><a href="#portfolio"></a></li>
								<li><a class="btn-sm btn-theme" href="logout.php">Log Out</a></li>
							</ul>
							<br>
							<!-- SEARCH BAR START -->


							<input type="text" placeholder="Search &nbsp; Songs.." style="border-radius: 25px; border:3px solid; border-color: rgb(228, 155, 15); text-align:center; width: 25rem; font-weight:800;" onclick="location.href='search.php';">

							<!-- SEARCH BAR END -->
						
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->

			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			

</body>
</html>