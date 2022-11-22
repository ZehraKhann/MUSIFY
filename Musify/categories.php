<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- !-- Favicon --> 
		<link rel="shortcut icon" href="img/logo/favicon.ico">
    <title>Categories</title>
</head>
<body>
<?php include "header.php";
 ?>    


<!-- Categories abbum -->
			<div class="featured pad" id="featuredalbum">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Categories</h2>
					</div>
					<!-- featured album elements -->
					<?php 
								 $sql = "SELECT * FROM Category ";
								 $result = $conn->query($sql);
								if ($result->num_rows > 0) {                                    
								while ($row = $result->fetch_assoc()) {    
								 
								?>
					<div class="featured-element">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
								
                                    <a href="categories/artist_view.php?id=<?php echo $row['cat_id']; ?>">
                                    <div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/<?php echo $row['image']; ?>" alt="" />
										<!-- paragraph -->
										<p style="font-weight:bolder; text-align:center;"><br><br><?php echo $row['cat_name']; ?><br></p>
									</div>
                                    </a>     
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4></h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<?php       }                                    
                                        }                                   
                                    ?>
						
						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- categories end -->
			

<br><br>




</body>
</html>