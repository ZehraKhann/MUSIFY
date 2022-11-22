<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Musify</title>
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



		<!-- header-start -->
		<?php include "header.php"; ?>
		<!-- header-end -->
	
		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">


			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner/b1.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Melodi For You!</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.</h3>
									<!-- button -->
									<a href="#" class="animated fadeIn btn btn-theme">Download Here</a>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b2.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Latest Song on Musify.</h3>
									<!-- button -->
									<a href="categories.php" class="animated fadeIn btn btn-theme">Listen Now</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			
			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Featured Songs</h2>
						<hr>
						<!-- paragraph -->
						<p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p>
					</div>
					<!-- hero play list -->
					<div class="hero-playlist">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- music album image -->
								<div class="figure">
									<!-- image -->
									<img class="img-responsive" src="img/album/Marshmellow.jpg" alt="" />
									<!-- disk image -->
									<img class="img-responsive disk" src="img/album/disk.png" alt="" />
								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
									<h4>Alone</h4>
									<!-- composed by -->
									<h5>Marshmello </h5>
									<!-- paragraph -->
									<p>Marshmello is a celebrated American electronic dance music producer and DJ.</p>
									<!-- button -->
									<a href="#" class="btn btn-lg btn-theme" id="playNowBtn"><i class="fa fa-play"></i>&nbsp; Play Now</a>
								</div>
							</div>


							<?php
								     include 'config.php';
                            
									 $sql = "SELECT * FROM featured_song";
									 $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
									 if(mysqli_num_rows($result) > 0){
									 ?>
									 
								  <?php while($row = mysqli_fetch_assoc($result)){ ?>   
                          

							<div class="col-md-6 col-sm-6">
								<!-- play list -->
								<div class="playlist-content">
									<ul class="list-unstyled">
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4><?php echo $row['song_name']; ?></h4>
												<p><strong>Genres: &nbsp;</strong><?php echo $row['genres']; ?> &nbsp;|&nbsp; <strong>Singer</strong>: <?php echo $row['singer']; ?></p><br>
											</div>

											<audio style="width: 53rem; height: 2.5rem;" controls="">
                                        		<source src="admin/featured/<?php echo $row['audio_url']; ?>" type="audio/ogg">
                                     		</audio>
								
											<div class="clearfix"></div>
										</li>
									</ul>
								</div>
							</div>
	
			<?php 
			}
			} 	
			?>
						</div>
					</div>
				</div>
			</div>
			
			<!--/ hero end -->
	<!-- promo -->
	<div class="promo parallax-one pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">

			
					</div>
				</div>
			</div>
			<!--/ promo end -->
		

				<!-- VIDEO START -->

		<div id="latestalbum" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Featured Videos</h2>
						<hr>
						<!-- paragraph -->
						<p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p>
					</div>
					<!-- hero play list -->
					<div class="hero-playlist">
					
							<?php
								     include 'config.php';
                            
									 $sql = "SELECT * FROM featured_video";
									 $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
									 if(mysqli_num_rows($result) > 0){
									 ?>
									 
								  <?php while($row = mysqli_fetch_assoc($result)){ ?>   
                          

							<div class="col-md-6 col-sm-6">
								<!-- play list -->
								<div class="playlist-content">
									<ul class="list-unstyled">
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4 style="font-weight:bold;"><?php echo $row['video_name']; ?></h4>
												<p>&nbsp;|&nbsp; <strong>Singer</strong>: <?php echo $row['singer']; ?></p><br>
											</div>

											<video width="500" height="270" controls="">
												<source src="admin/featured/<?php echo $row['video_url']; ?>" type="video/mp4">
											</video>

											<div class="clearfix"></div>
										</li>
									</ul>
								</div>
							</div>
	
			<?php 
			}
			} 	
			?>
						</div>
					</div>
				</div>
			</div>

				<!-- VIDEO END  -->









			
			<!-- promo -->
			<div class="promo parallax-one pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">
						<!-- heading -->
						<h3>Music An Art...</h3>
						<!-- paragraph -->
						<p>Music is an art form and cultural activity whose medium is sound organized in time. The common elements of music are <strong>pitch</strong>, <strong>rhythm</strong>, <strong>dynamics</strong> and the sonic qualities of <strong>timbre</strong> and <strong>texture</strong>.</p>
						<!-- link -->
						<a class="promo-link" href="#"><i class="fa fa-play-circle"></i></a>
					</div>
				</div>
			</div>
			<!--/ promo end -->
			
			
			<!-- call to action -->
			<div class="cta parallax-one pad">
				<div class="container">
					<!-- cta element -->
					<div class="cta-element ">
						<div class="row">
							<div class="col-md-9 col-sm-8">
								<!-- heading -->
								<h3>Musify, A Fully Rock Album Pro</h3>
								<!-- paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim sectetur adipiscing elit, sed do eiusmod tempoad minim veniam consequat.</p>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="cta-btn text-center">
									<!-- purchase now button -->
									<a href="#" class="btn btn-default btn-lg" style="border: 3px solid #3e3e3e;">Download Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ cta end -->
			
			
			<!-- news letter -->
			<div class="news-letter">
				<div class="container">
					<!-- news letter inner content -->
					<div class="news-content ">
						<!-- heading -->
						<h3>Sign Up For Newsletter</h3>
						<!-- paragraph -->
						<p><strong>Contact Us</strong> and let us know if you have any questions, Don't forget to subscribe for more awesome stuff by typing mail bellow.</p>
						<!-- subscribe form -->
						<form>
							<div class="input-group">
								<input type="text" class="form-control input-lg" placeholder="Email" style="border: 3px solid #3e3e3e;">
								<span class="input-group-btn">
									<button class="btn btn-default btn-lg" type="button" style="border: 3px solid #3e3e3e;">Subscribe</button>
								</span>
							</div><!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
			<!-- news letter end -->
			
			
			<!-- footer-start -->
			<?php include "footer.php"; ?>			
			<!-- footer-end -->

			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- WayPoints JS -->
		<script src="js/waypoints.min.js"></script>
		<!-- Include js plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- One Page Nav -->
		<script src="js/jquery.nav.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>