<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// $id=$_GET['id'];
	$name = $_POST["name"];
	$rating = $_POST["rating"];
	$review = $_POST["revieww"];
	$song_id = $_GET['id'];

	$sql = "INSERT INTO `review_table`( `name`, `rating`, `review`,`song_id_get`) VALUES ('[$name]','[$rating]','[$review]','$song_id')";

	if (mysqli_query($conn, $sql)) {
		echo '<script>alert("Thanks For Review.")</script>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Musify</title>
	<!-- Description, Keywords and Author -->
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your,Keywords">
	<meta name="author" content="HimanshuGupta">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>


	<!-- Favicon -->
	<link rel="shortcut icon" href="../img/logo/favicon.ico">


	<style>
		@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css);

		.rating-wrap {
			max-width: 480px;
			margin: auto;
			padding: 15px;
			box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
			text-align: center;
		}

		.center {
			width: 162px;
			margin: auto;
		}


		#rating-value {
			width: 110px;
			margin: 40px auto 0;
			padding: 10px 5px;
			text-align: center;
			box-shadow: inset 0 0 2px 1px rgba(46, 204, 113, .2);
		}

		/*styling star rating*/
		.rating {
			border: none;
			float: left;
		}

		.rating>input {
			display: none;
		}

		.rating>label:before {
			content: '\f005';
			font-family: FontAwesome;
			margin: 5px;
			font-size: 2.4rem;
			display: inline-block;
			cursor: pointer;
		}

		.rating>.half:before {
			content: '\f089';
			position: absolute;
			cursor: pointer;
		}


		.rating>label {
			color: #ddd;
			float: right;
			cursor: pointer;
		}

		.rating>input:checked~label,
		.rating:not(:checked)>label:hover,
		.rating:not(:checked)>label:hover~label {
			color: darkorange;
		}

		.rating>input:checked+label:hover,
		.rating>input:checked~label:hover,
		.rating>label:hover~input:checked~label,
		.rating>input:checked~label:hover~label {
			color: darkorange;
		}
	</style>
</head>

<body>

	<?php include "../header2.php"; ?>
	<br><br><br><br><br><br><br><br><br><br>


	<?php
	$song_id = $_GET['id'];
	$sql = "SELECT * FROM song WHERE song_id=$song_id";
	$query = mysqli_query($conn, $sql) or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	?>
	<section class="blue">
		<div class="curve"></div>
	</section>
	<section>
		<main class="py-5">
			<div class="container px-4 px-lg-5 my-5">
				<div class="row gx-4 gx-lg-5 align-items-center">
					<div class="col-md-6">

						<h4 class="display-12 fw-bolder text-white">Video Song</h4>
						<video height="300rem" class="card-img-top mb-5 mb-md-0" style="border: 3px solid darkorange; border-radius:25px; box-shadow: 0 0 10px black;" controls>
							<source src="../admin/video/<?php echo $row['video_song']; ?>" type="video/mp4">
						</video><br><br><br>


						<h4 class="display-12 fw-bolder text-white">Audio Song</h4>
						<audio class="card-img-top mb-5 mb-md-0" style="border: 3px solid darkorange; border-radius:25px;  box-shadow: 0 0 10px black;" controls>
							<source src="../audio/<?php echo $row['audio_song']; ?>" type="audio/ogg">
						</audio>
					</div>
					<div class="col-md-6 text-white">

						<h1 class="display-5 fw-bolder" style="-webkit-text-fill-color: black;
  								-webkit-text-stroke: 1px;"><?php echo $row['song_name']; ?></h1><br><br>
						<div class="fs-5 mb-5">
							<h4>Genre: <a href="#"><?php echo $row['genre']; ?></a></h4>
							<h4>Singer: <a href="#">
									<?php $art = $row['artist_id'];
									$select = "SELECT * FROM artist WHERE artist_id = $art";
									$query2 = mysqli_query($conn, $select) or die(mysqli_error());
									$row2 = mysqli_fetch_array($query2);
									?>
									<?php echo $row2['artist_name']; ?>
								</a></h4>
							<h4>Released Date: <a href="#"><?php echo $row['realesed_date']; ?></a></h4>
						</div>

						<!-- REVIEW -->
						<br>
						<div class="modal-content" style="box-shadow: 0 0px 0px white;">
							<div class="modal-header">
								<h4 class="modal-title" style="color: darkorange;">Submit Review</h4>
							</div>
							<div class="modal-body">
								<h4 class="text-center mt-2 mb-4">
		
									<form action="" method="post">
										<div class="center">
											<fieldset class="rating">
												<input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="full"></label>
												<input type="radio" id="star4.5" name="rating" value="4.5" /><label for="star4.5" class="half"></label>
												<input type="radio" id="star4" name="rating" value="4" /><label for="star4" class="full"></label>
												<input type="radio" id="star3.5" name="rating" value="3.5" /><label for="star3.5" class="half"></label>
												<input type="radio" id="star3" name="rating" value="3" /><label for="star3" class="full"></label>
												<input type="radio" id="star2.5" name="rating" value="2.5" /><label for="star2.5" class="half"></label>
												<input type="radio" id="star2" name="rating" value="2" /><label for="star2" class="full"></label>
												<input type="radio" id="star1.5" name="rating" value="1.5" /><label for="star1.5" class="half"></label>
												<input type="radio" id="star1" name="rating" value="1" /><label for="star1" class="full"></label>
												<input type="radio" id="star0.5" name="rating" value="0.5" /><label for="star0.5" class="half"></label>
											</fieldset>
										</div>
										<pre id="rating-value"></pre>
							</div>
							</h4>
							<div class="form-group">
								<input type="text" name="name" id="user_name" class="form-control" placeholder="Enter Your Name" />
							</div>
							<div class="form-group">
								<textarea name="revieww" rows="4" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
							</div>
							<div class="form-group text-center mt-4">
								<button type="submit" name="add" class="btn btn-lg btn-theme" id="save_review">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>


			</div>
			</div>
			</div>
			<main>


	</section>
	</section>










	<br><br><br><br><br><br>





	<?php include "../footer.php"; ?>



	<!-- Javascript files -->
	<!-- jQuery -->
	<script src="../js/jquery.js"></script>
	<!-- Bootstrap JS -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- WayPoints JS -->
	<script src="../js/waypoints.min.js"></script>
	<!-- Include js plugin -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- One Page Nav -->
	<script src="../js/jquery.nav.js"></script>
	<!-- Respond JS for IE8 -->
	<script src="../js/respond.min.js"></script>
	<!-- HTML5 Support for IE -->
	<script src="../js/html5shiv.js"></script>
	<!-- Custom JS -->
	<script src="../js/custom.js"></script>
	<!-- Rate JS -->
	<!-- <script src="../js/star-ratings.js"></script>
	 -->
</body>