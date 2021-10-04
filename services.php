
							
<!doctype html>
<html lang="en">
	<head>
		<?php $page='services'; include 'includes/head.php'; ?>
	</head>
	<body>
		<header>
			<?php include 'includes/navbar.php'; ?>		
		</header>

		 <?php if(isset($_SESSION['msg'])) { ?>
            <div id="message_alert" style="z-index: 2000; position: fixed; top: 0; right: 0; margin-right: 20px; margin-top: 20px;" class="alert alert-danger">
                <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                ?>
            </div>
        <?php } ?>

		
			
		<div class="booking-img">
			<img src="images/booking.jpg" class="img-fluid background-image">			
			<div class="container booking-form">
				<form action="booking.php" method="POST" >
					<div class="row schedule justify-content-center">
						<div class="col-11">				
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-3 checkin border border-white rounded-pill">
									<div class="row">
										<label for="checkin">Checkin</label>
										<input id="checkin" type="date" name="checkin" value="">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 checkout border border-white rounded-pill">
									<div class="row">
										<label for="checkout">Chekout</label>
										<input id="checkout"type="date" name="checkout" value="">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 type border border-white rounded-pill">
									<div class="row">
										<p>Room/Suite type</p>
										<select class="form-select" name="room_type" id="type" required>
										    <option selected></option>
										    <option value="Deluxe">Deluxe</option>
										    <option value="Super Deluxe">Super Deluxe</option>
										    <option value="Executive Twin">Executive Twin</option>
										    <option value="Suite">Suite</option>	
										  </select>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 booking">
									<button type="submit" class="btn btn-book ">Book now</button>
								</div>								
							</div>			
						</div>
					</div>
				</form>
			</div>
		</div>



					
			
		

		<!--  Services Section   ----->

		<div class="container p-0 py-5 services">
			<h2 class="text-center p-5">Our Services</h2>			 
			<img src="images/services.jpg" class="img-fluid shadow rounded">			
			<div class="container">
				<div class="row  justify-content-center service_blocks">
					<?php
						require_once('db/connection.php');
						$query="SELECT * FROM service";
						$result= mysqli_query($link,$query);
						$num_of_rows= mysqli_num_rows($result);
						if($num_of_rows){
							while($service=mysqli_fetch_assoc($result)){
					?>
							<div class="col-12 col-md-6 col-lg-4 p-5">
								<div class="blk text-wrap w-100 shadow">
									<img class="icons img-fluid  " src="images/<?php echo $service['service_photo']; ?>" />					
									<h4><?php echo $service['service_name']; ?></h4>
									<p ><?php echo $service['service_details']; ?></p>
								</div>								
							</div>
					<?php
							}
						}
					?>
							
				</div>
			</div>
		</div>

		<!---Room section-->
		
		<div class="container-fluid room-section">
			<h2>Rooms/Suites</h2>
			<div class="container">
				<div class="row justify-content-center">
					<?php						
						$query = "SELECT * FROM room";
						$result = mysqli_query($link, $query);
						$no_of_rows= mysqli_num_rows($result);
						if($no_of_rows){
							while($room= mysqli_fetch_assoc($result)){
								?>																			
						<div class="col-sm-10 col-md-9 col-lg-6 card-blk">
							<div class="card shadow rounded">
                                <div class="card-body p-0  room-card">
                                    <div class="row">
                                        <div class="col-md-7 card-partition" 
                                        	 style="background-image: url('images/<?php echo $room['room_photo']; ?>');"></div>
                                        <div class="col-md-5 p-3">
                                            <h5 class="card-title"><?php echo $room['room_type']; ?></h5>
                                            <p class="card-text">Available now: <span><?php echo $room['available']; ?></span></p>
                                            <p class="card-text">Rate: <span><?php echo $room['rate']; ?> BDT per night</span></p>
                                            <p class="card-text">Size: <span><?php echo $room['size']; ?> square feet</span></p>
                                            <a href="details.php?room_id=<?php echo $room['id']; ?>" class="btn btn-sm">View Details</a>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
						<?php
							}
						}
						?>										
				
				</div>				
			</div>
		</div>
		<!---Room section ends-->

	
		
		<footer>
			<?php include 'includes/footer.php'; ?>	
		</footer>
		<!-- scripts -->
		<?php include 'includes/scripts.php'; ?> 

        <script>
            $(document).ready(function() {
                $('#message_alert').fadeOut(8000);
            });
        </script>
		 
	</body>
</html>
