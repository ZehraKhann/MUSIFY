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
		
        <!-- Favicon -->
		<link rel="shortcut icon" href="../img/logo/favicon.ico">
	</head>
<body>
    
    <?php include "../header2.php"; ?>    
    
	<br><br><br>
	<!-- about -->
	<div class="about" id="team">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>ARTISTS</h2>
					</div>

<?php 
include '../config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM artist WHERE cat_id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {                                    
	while ($row = $result->fetch_assoc()) {    

?>


				<!-- START  -->
				<!-- our team -->
				<div class="team">
					<div class="container">	
						<!-- Team Member's Details -->
						<div class="team-content">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member  delay-one">
										<!-- Image Hover Block -->
										<div class="member-img">
											<!-- Image  -->
											<img  width="1rem" class="img-responsive" src="../img/artist/<?php echo $row['image'];?>" alt="" />
											<!-- Hover block -->
											<div class="social text-center">
												<a href="../select.php?id=<?php echo $row['artist_id']; ?>">Album  </a>	
											</div>
										</div>
										<!-- Member Details -->
										<h3><?php echo $row['artist_name'];?></h3>
										<span class="designation"></span>
									</div>
								</div>
		
								<!-- END -->
								<?php 
							 }
							} 
							 ?>
							 </div>
						</div>
					</div>
				</div>
			</div>
			
			<?php include "../footer.php"; ?>    
		
			<!-- about end -->
			


			
				
</body>
<htnl/>





