<?php
if (isset($_GET['room_id']) && !empty($_GET['room_id'])){
	require_once ('db/connection.php');
	$roomId= $_GET['room_id'];

	
	$query = "SELECT * FROM room WHERE id='$roomId'";
	$result = mysqli_query($link, $query);
	$no_of_rows= mysqli_num_rows($result);

?>


<!doctype html>
<html lang="en">
	<head>
		<?php $page='services'; include 'includes/head.php'; ?>
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
						  <a class="nav-link <?php if($roomId==1){echo 'active';} ?>" href="details.php?room_id=1">Deluxe</a>
						  <a class="nav-link <?php if($roomId==2){echo 'active';} ?>" href="details.php?room_id=2">Super Deluxe</a>
						  <a class="nav-link <?php if($roomId==3){echo 'active';} ?>" href="details.php?room_id=3">Executive Twine</a>
						  <a class="nav-link <?php if($roomId==4){echo 'active';} ?>" href="details.php?room_id=4">Suite</a>
						</nav>
					</div>

					<div class="col-md-9 col-lg-8 details">
						<?php
						if($no_of_rows){
							if($room= mysqli_fetch_assoc($result)){

								$categoryId= $roomId;	
								$queryimg = "SELECT * FROM image WHERE category_id='$categoryId'";
								$res = mysqli_query($link, $queryimg);
								$noOfRows= mysqli_num_rows($res);

								?>																			
						<div class="card mb-3">

							<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
							  <div class="carousel-inner">
							  	<div class="carousel-item active">
							  		<img src="images/<?php echo $room['room_photo']; ?>" class="card-img-top" alt="..."> 
							  	</div>

							  	<?php
									if($noOfRows){
										while($image= mysqli_fetch_assoc($res)){
								?>
							    
							     <div class="carousel-item ">
							  		<img src="images/<?php echo $image['image_name']; ?>" class="card-img-top" alt="..."> 
							  	</div>
							    
							    <?php
										}
									}
							    ?>
							    
							</div>
							  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Previous</span>
							  </button>
							  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Next</span>
							  </button>
							</div>

						  <div class="card-body">
						    <h5 class="card-title"><?php echo $room['room_type']; ?></h5>
                            <p class="card-text">Available now: <span><?php echo $room['available']; ?></span></p>
                            <p class="card-text">Rate: <span><?php echo $room['rate']; ?> BDT per night</span></p>
                            <p class="card-text">Size: <span><?php echo $room['size']; ?> square feet</span></p>
                            <p class="card-text">Details: <span><?php echo $room['room_details']; ?></span></p>
                            
						  </div>
						</div>	
					<?php
							
							}
						}
} 
					?>
					
															
				
				</div>				
			</div>

		<footer>
			<?php include 'includes/footer.php'; ?>	
		</footer>
		<!-- scripts -->
		<?php include 'includes/scripts.php'; ?> 
	</body>
</html>




