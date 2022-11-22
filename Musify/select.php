<?php 
include 'config.php';
?><!DOCTYPE html>
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
		
		<div class="wrapper" id="home">


			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
<?php 
$id = $_GET['id'];

$sql = "SELECT * FROM artist WHERE artist_id=$id";
$query = mysqli_query($conn , $sql ) or die(mysqli_error());
$row = mysqli_fetch_array($query);
?>

						<h2><?php echo $row['artist_name']; ?> &nbsp; Album's</h2>
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
									<img class="img-responsive" src="img/artist/<?php echo $row['image'];?>" alt="" />
									<!-- disk image -->
			
								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
								</div>
							</div>


							<?php
								    
                            
									 $sql = "SELECT * FROM song WHERE artist_id = $id";
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
												<a href="categories/song.php?id=<?php echo $row['song_id']; ?>"><h4><?php echo $row['song_name']; ?></h4></a>
												<p><strong>Genres: &nbsp;</strong><?php echo $row['genre']; ?> </p>
                                                
											</div>
                                            
											<!-- music icon -->					
									<audio id="myAudio">
										<source src="admin/featured/<?php echo $row['audio_song']; ?>" type="audio/mpeg">
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
			

			
	
			<!-- meet end -->
			
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