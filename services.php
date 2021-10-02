
							
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
			<img src="images/booking.jpg" class="img-fluid">
			
			<div class="container-fluid p-0  booking-form">
				<form action="booking.php" method="POST" >

					<div class="row schedule justify-content-center">
						<div class="col-sm-12 col-md-6 col-lg-4 checkin border border-white rounded-pill">
							<p>Checkin date</p>
							<div class="row">
								<div class="blk-day ">
									<div class="input-group mb-3 ">								
										<select class="form-select-sm" name="checkin_day" id="day" required>
										    <option selected></option>
										    <option value="01">1</option>
										    <option value="02">2</option>
										    <option value="03">3</option>
										    <option value="04">4</option>
										    <option value="05">5</option>
										    <option value="06">6</option>
										    <option value="07">7</option>
										    <option value="08">8</option>
										    <option value="09">9</option>
										    <option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
									  	</select>
									  	<label class="input-group-text px-o" for="day">Day</label>				 
									</div>					
								</div>
								<div class="blk-month">
									<div class="input-group mb-3 ">
										<select class="form-select-sm" name="checkin_month" id="day" required>
										    <option selected></option>
										    <option value="01">January</option>
										    <option value="02">February</option>
										    <option value="03">March</option>
										    <option value="04">April</option>
										    <option value="05">May</option>
										    <option value="06">June</option>
										    <option value="07">July</option>
										    <option value="08">August</option>
										    <option value="09">September</option>
										    <option value="10">October</option>
										    <option value="11">November</option>								
											<option value="12">December</option>								
										  </select>
										  <label class="input-group-text" for="day">Month</label>
									</div>	
								</div>
								<div class="blk-year">
									<div class="input-group mb-3 ">
										<select class="form-select-sm" name="checkin_year" id="year" required>
										    <option value="2021" selected>2021</option>
										    
										    <option value="2022">2022</option>
										    								
										  </select>
										<label class="input-group-text " for="day">Year</label>
									</div>	
								</div>
							</div>
							
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 checkout border border-white rounded-pill">
							<p>Checkout date</p>
							<div class="row">
								<div class="blk-day ">
									<div class="input-group mb-3 ">								
									<select class="form-select-sm" name="checkout_day" id="day" required>
									    <option selected></option>
									    <option value="01">1</option>
									    <option value="02">2</option>
									    <option value="03">3</option>
									    <option value="04">4</option>
									    <option value="05">5</option>
									    <option value="06">6</option>
									    <option value="07">7</option>
									    <option value="08">8</option>
									    <option value="09">9</option>
									    <option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
								  	</select>
								  	<label class="input-group-text px-o" for="day">Day</label>
								  
								</div>					
								</div>
								<div class="blk-month">
									<div class="input-group mb-3 ">
										<select class="form-select-sm" name="checkout_month" id="day" required>
										    <option selected></option>
										    <option value="01">January</option>
										    <option value="02">February</option>
										    <option value="03">March</option>
										    <option value="04">April</option>
										    <option value="05">May</option>
										    <option value="06">June</option>
										    <option value="07">July</option>
										    <option value="08">August</option>
										    <option value="09">September</option>
										    <option value="10">October</option>
										    <option value="11">November</option>								
											<option value="12">December</option>								
										  </select>
										  <label class="input-group-text" for="day">Month</label>
									</div>	
								</div>
								<div class="blk-year">
									<div class="input-group mb-3 ">
										<select class="form-select-sm" name="checkout_year" id="year" required>
										    <option value="2021" selected>2021</option>
										    
										    <option value="2022">2022</option>
										    								
										  </select>
										<label class="input-group-text " for="day">Year</label>
									</div>	
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3 type border border-white rounded-pill">
							
							<p>Select Room/Suite type</p>
							<div class="row">
								<div class="blk-type ">
									<div class="input-group mb-3 ">
										<select class="form-select-sm" name="room_type" id="type" required>
										    <option selected></option>
										    <option value="Deluxe">Deluxe</option>
										    <option value="Super Deluxe">Super Deluxe</option>
										    <option value="Executive Twin">Executive Twin</option>
										    <option value="Suite">Suite</option>
										   								
										  </select>
										<label class="input-group-text " for="day">Type</label>
									</div>
								</div>
								<div class="blk-book " >
									<button type="submit" class="btn btn-book ">Book now</button>
								</div>	
							</div>
							
						</div>							
					</div>
					
				</form>
			</div>
			
		</div>

		<div class="container p-0 py-5 services">
			<h2 class="text-center p-5">Our Services</h2>
			 
			<img src="images/services.jpg" class="img-fluid">
			
			<div class="container">
				<div class="row  justify-content-center service_blocks">
					<div class="col-12 col-md-6 col-lg-4 p-5">
						<div class="blk text-wrap w-100 shadow">
							<img class="icons img-fluid  " src="images/hotel.png" />					
							<h4>Rooms/Suites</h4>
							<p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
						</div>								
					</div>

					<div class="col-12 col-md-6 col-lg-4 p-5">
						<div class="blk text-wrap w-100 shadow">
							<img class="icons img-fluid  " src="images/dish.png" />					
							<h4 >Food Dine</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
						</div>								
					</div>
					
					<div class="col-12 col-md-6 col-lg-4 p-5">
						<div class="blk text-wrap w-100 shadow">
							<img class="icons img-fluid  " src="images/swimming-pool.png" />					
							<h4>Swiming Pool</h4>
							<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por</p>
						</div>								
					</div>

					<div class="col-12 col-md-6 col-lg-4 p-5">
						<div class="blk text-wrap w-100 shadow">
							<img class="icons img-fluid  " src="images/spa.png" />					
							<h4>Spa</h4>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of</p>
						</div>								
					</div>

					<div class="col-12 col-md-6 col-lg-4 p-5">
						<div class="blk  text-wrap w-100 shadow">
							<img class="icons img-fluid  " src="images/meeting-room.png" />					
							<h4>Meeting Room</h4>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of</p>
						</div>								
					</div>								
				</div>
			</div>
		</div>

		<!---Room section-->
		
		<div class="container-fluid catagory-section">

			<div class="container p-0">
				<div class="row">
					<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 p-0">
						<p class="px-3">Categyory</p>
						<nav class="nav flex-column">					
						  <a class="nav-link active" href="#">Deluxe</a>
						  <a class="nav-link" href="#">Super Deluxe</a>
						  <a class="nav-link" href="#">Executive Twine</a>
						  <a class="nav-link">Suite</a>
						</nav>
					</div>
					<div class="co-xs-8 col-sm-10 col-md-8 col-lg-10">
						<div class="container-fluid">
							<div class="row">								
							<?php
								require_once ('db/connection.php');
								$query = "SELECT * FROM room";
								$result = mysqli_query($link, $query);
								$no_of_rows= mysqli_num_rows($result);
								if($no_of_rows){
									while($row= mysqli_fetch_assoc($result)){
										?>																			
								<div class="col-md-12 col-lg-6 card-blk d-flex">
									<div class="card flex-column">
									  <div class="row">
									    <div class="col-md-8 card-partion">
									      <img src="images/room1.jpg" class="img-fluid rounded-start card_img" alt="...">
									    </div>
									    <div class="col-md-4">
									      <div class="card-body">
									        <h5 class="card-title"><?php echo $row['room_type']; ?></h5>
									        <p class="card-text">Available: <span><?php echo $row['available']; ?></span></p>
									        <p class="card-text">Rate: <span><?php echo $row['rate']; ?></span></p>
									        <p class="card-text">Size: <span><?php echo $row['size']; ?></span></p>
									        <p class="card-text">View Detailes</p>
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
				</div>				
			</div>
		</div>
		<!---Room section ends-->

		<!---Gallery section-->
		<div class="container-fluid catagory-section">

			<div class="container p-0">
				<div class="row">
					<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 p-0">
						<p class="px-3">Categyory</p>
						<nav class="nav flex-column">					
						  <a class="nav-link active" href="#">Deluxe</a>
						  <a class="nav-link" href="#">Super Deluxe</a>
						  <a class="nav-link" href="#">Executive Twine</a>
						  <a class="nav-link">Suite</a>
						</nav>
					</div>
					<div class="co-xs-8 col-sm-10 col-md-8 col-lg-10">
														
							<?php
								require_once ('db/connection.php');
								$query = "SELECT * FROM room";
								$result = mysqli_query($link, $query);
								$no_of_rows= mysqli_num_rows($result);
								if($no_of_rows){
									while($row= mysqli_fetch_assoc($result)){
										?>																			
								
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

        <script>
            $(document).ready(function() {
                $('#message_alert').fadeOut(8000);
            });
        </script>
		 
	</body>
</html>
