<?php
	require_once ('db/connection.php');
	$query= null;
	$result= null;
	$no_of_rows= null;
	$categoryId=null;
	if(empty($_GET['category_id'])){
		
	$query = "SELECT * FROM image";
	$result = mysqli_query($link, $query);
	$no_of_rows= mysqli_num_rows($result);
}
else{
	$categoryId= $_GET['category_id'];
		

		if($categoryId<20){
			if($categoryId!=10){
				$query = "SELECT * FROM image where category_id='$categoryId' ";
				$result = mysqli_query($link, $query);
				$no_of_rows= mysqli_num_rows($result);
			}
			else if($categoryId=10){
			$query = "SELECT * FROM image where category_id<20 ";
			$result = mysqli_query($link, $query);
			$no_of_rows= mysqli_num_rows($result);
			}
		}else if($categoryId>20){
			$query = "SELECT * FROM image where category_id='$categoryId'";
			$result = mysqli_query($link, $query);
			$no_of_rows= mysqli_num_rows($result);
		}

	}

?>


<!doctype html>
<html lang="en">
	<head>
		<?php $page='gallery'; include 'includes/head.php'; ?>
	</head>
	<body>
		<header>
			<?php include 'includes/navbar.php'; ?>		
		</header>

			<div class="container-fluid category-section ">
				<div class="row justify-content-center">
					<div class=" col-md-3 col-lg-2 p-0">
						<p class="px-3 fw-bold">Category</p>
						<nav class="nav flex-sm-row flex-md-column  room-category">
						  <a class="nav-link <?php if($categoryId==10){echo 'active';} ?>" href="team.php?category_id=10">All Rooms/suites</a>					
						  <a class="nav-link <?php if($categoryId==1){echo 'active';} ?>" href="team.php?category_id=1">Deluxe</a>
						  <a class="nav-link <?php if($categoryId==2){echo 'active';} ?>" href="team.php?category_id=2">Super Deluxe</a>
						  <a class="nav-link <?php if($categoryId==3){echo 'active';} ?>" href="team.php?category_id=3">Executive Twine</a>
						  <a class="nav-link <?php if($categoryId==4){echo 'active';} ?>" href="team.php?category_id=4">Suite</a>
						  <a class="nav-link <?php if($categoryId==21){echo 'active';} ?>" href="team.php?category_id=21">Swimming Pool</a>
						  <a class="nav-link <?php if($categoryId==22){echo 'active';} ?>" href="team.php?category_id=22">Meeting room</a>
						  <a class="nav-link <?php if($categoryId==23){echo 'active';} ?>" href="team.php?category_id=23">Food services</a>
						  <a class="nav-link <?php if($categoryId==24){echo 'active';} ?>" href="team.php?category_id=24">Spa</a>
						  <a class="nav-link <?php if($categoryId==25){echo 'active';} ?>" href="team.php?category_id=25">Party Hall</a>
						  <a class="nav-link <?php if($categoryId==31){echo 'active';} ?>" href="team.php?category_id=31">Others</a>
						  <a class="nav-link <?php if($categoryId==null){echo 'active';} ?>" href="team.php">Show all</a>
						</nav>
					</div>

					<div class="col-md-9 col-lg-8 gallery">

						<div class="row ">
							<?php
									if($no_of_rows){
										while($image= mysqli_fetch_assoc($result)){
								?>
							    
							     <div class="col-sm-4 col-md-4 col-lg-3 img-box" >
									<a href="images/<?php echo $image['image_name'] ?>"><img src="images/<?php echo $image['image_name'] ?>" class="img-fluid">	</a>							
								</div>
							    
							    <?php
										}
									}
							    ?>

							

							
						</div>

						
					</div>

					
															
				
				</div>				
			</div>

		<footer>
			<?php include 'includes/footer.php'; ?>	
		</footer>
		<!-- scripts -->
		<?php include 'includes/scripts.php'; ?> 
	</body>
</html>




