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
			
                        



<!-- contact -->
<div class="contact pad" id="contact">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Search Song's Here,</h2>
					</div>
					<div class="row">	
					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>What Do You Want to Listen To&nbsp; ? &nbsp; </p>
<br><br>
					<?php
					if (isset($message2)) {
						foreach ($message2 as $message2) {
							echo '<span class="message2">' . $message2 . '</span>';
						}
					}
					?>
					


						<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="contactForm" method="GET" style="margin-left:38rem;">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Search Song</label>
										<input type="text" class="form-control" id="name" name="search" required oninvalid="this.setCustomValidity('Song Name is Required')" oninput="this.setCustomValidity('')" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];} ?>" placeholder="Enter Song name">
									</div>
							<div class="text-center">
								<button  type="submit" class="btn btn-lg btn-theme"><i class="fa fa-search"></i>&nbsp;&nbsp; SEARCH</button>
							</div>
						</form>
												
					</div>

				</div>
			</div>
			<!-- contact end -->
<br><br><br><br>

	<div class="col-md-12">
		<div class="card mt-4">
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="text-align:center; font-weight:900; font-size:1.7rem; color:darkorange; ">SONG NAME</th>
							<th style="text-align:center; font-weight:900; font-size:1.7rem; color:darkorange; ">SINGER </th>
							<th style="text-align:center; font-weight:900; font-size:1.7rem; color:darkorange; ">AUDIO SONG</th>
							<th style="text-align:center; font-weight:900; font-size:1.7rem; color:darkorange; ">VIDEO SONG</th>
						</tr>
					</thead>
					<tbody>
					<?php  
						include "config.php";
						if(isset($_GET['search']))
						{
							$filtervalues = $_GET['search'];
							$query = "SELECT * FROM song WHERE CONCAT(song_id,song_name,audio_song,video_song) LIKE '%$filtervalues%' ";
							$query_run=mysqli_query($conn,$query);
						
							if(mysqli_num_rows($query_run) > 0)
							{
								foreach($query_run as $items)
								{
									?>
								<tr>
									<td style="text-align:center; font-weight:900; font-size:2rem; color:darkorange; -webkit-text-fill-color: 1px gray;
  									-webkit-text-stroke: 1px;"><br><br><?= $items['song_name']; ?></td>
									<td style="text-align:center; font-weight:900; font-size:2rem; color:darkorange;  -webkit-text-fill-color: 1px gray;
  									-webkit-text-stroke: 1px;"><br><br><?= $items['singer_name']; ?></td>
									
									<td style="float:center; border: 0px;"><br><br><br>
										<audio style="width: 40rem; height: 3.5rem; border: 3px solid darkorange; border-radius:25px;  box-shadow: 0 0 10px black;" controls="">
											<source src="audio/<?= $items['audio_song']; ?>" type="audio/ogg">
										</audio>
									</td>
			
									<td>
										<br>
										<video width="250" height="140"  style="border: 3px solid darkorange; border-radius:25px; box-shadow: 0 0 10px black;" controls="">
											<source src="admin/video/<?= $items['video_song']; ?>" type="video/mp4">
										</video>
										<br><br>
									</td>
									<td>
										<br><br><br>
										<!-- <a class="btn btn btn-theme" href='categories/song.php?id=<?php echo $row['song_id'] ?>'>Review</a> -->
									</td>
								</tr>
			
									<?php
								}
							}
							else
							{
					?>
							<tr>
								<td colspan="4" style="text-align:center; font-weight:900; font-size:2rem; color:darkorange;"><br><br> No Song Found <br><br><br><br></td>
							</tr>
							<?php
							}

						}
					?>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>






























<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
                        
										</li>
									</ul>
								</div>
							</div>
	
			
						</div>
					</div>
				</div>
			</div>
			
			<!--/ hero end -->
			

			
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