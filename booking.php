<?php

	if (!empty($_POST)){
		require_once ('db/connection.php');
		//$checkin_day= $_POST['checkin_day'];
       // $checkin_month= $_POST['checkin_month'];
        //$checkin_year= $_POST['checkin_year'];
        //$checkin= "$checkin_year-$checkin_month-$checkin_day";
        $checkin= $_POST['checkin'];
        $checkout= $_POST['checkout'];
        //echo  $checkin ."hell o". $checkin;
        //echo "<br>";
        //print_r($checkin);
       // exit();

        //$checkout_day= $_POST['checkout_day'];
        //$checkout_month= $_POST['checkout_month'];
        //$checkout_year= $_POST['checkout_year'];
        //$checkout= "$checkout_year-$checkout_month-$checkout_day";

        $room_type= $_POST['room_type'];
       
        date_default_timezone_set('Asia/Dhaka');
        $currentTime= date('Y-m-d H:i:s');
        //echo $currentTime;
        $msg = "";                     
	}
	else{
		$msg='Please Enter all information';
        redirect("services.php", $msg);
	}
	// exit();

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



		<div class="container booking_confirmation_form">
			<div class="row mx-5 p-sm-0 p-0 justify-content-center ">
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-8 shadow-lg border-0 rounded p-4 mt-2  text-white text-center contact_form_banner">
				<h1>Confirm Reservation</h1>
				</div>
			</div>
			<div class="row  mx-5 fw-bold p-0 justify-content-center">
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-8 bg-light shadow-lg border-0 rounded p-5 pb-1 mb-0">

					<form action="booking_process.php" method="POST" >
						
						<div class=" mb-3">
							<label for="name" class="form-label">Full Name<span>*</span></label>
							<input for="name" type="text" name="name" value="" class="form-control" placeholder="Enter your name" required>
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email address<span>*</span></label>
							<input for="email" type="email" name="email" value="" class="form-control" placeholder="Enter your email address" aria-describedby="emailHelp" required>
						</div>
						<div class=" mb-3">
							<label for="phone" class="form-label">Phone<span>*</span></label>
							<input id="phone" type="tel" name="phone" value="" class="form-control" placeholder="Enter your phpne number" required>
						</div>
						
						<div class="row">
							<div class="col-6">
								<div class=" mb-3">
									<label for="checkin" class="form-label">Checkin<span>*</span></label>
									<input id="checkin" type="text" name="checkin" value="<?php echo $checkin ?>" class="form-control" required>
								</div>
							</div>
							<div class="col-6">	
								<div class=" mb-3">
									<label for="checkout" class="form-label">Checkout<span>*</span></label>
									<input id="checkout" type="text" name="checkout" value="<?php echo $checkout?>" class="form-control" required>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-6">
								<div class=" mb-3">
									<label for="adult" class="form-label">Adults<span>*</span></label>
									<input id="adult" type="number" name="adult" value="" class="form-control" required>
								</div>
							</div>
							<div class="col-6">	
								<div class=" mb-3">
									<label for="child" class="form-label">Children</label>
									<input id="child" type="number" name="child" value="" class="form-control">
								</div>
							</div>							
						</div>
						<div class=" mb-3">
							<div>
								<label for="room_type" class="form-label">Room Type<span>*</span></label>
							</div>
							
							<select id="room_type" class="form-select-sm" name="room_type" id="type" required>
							    <option selected value="<?php echo $room_type?>"><?php echo $room_type?></option>
							    <option value="Deluxe">Deluxe</option>
							    <option value="Super Deluxe">Super Deluxe</option>
							    <option value="Executive Twin">Executive Twin</option>
							    <option value="Suite">Suite</option>
							   								
							</select>
						</div>

						<div class="row justify-content-end p-0 m-0">							
							<div class="col-1 p-0 m-4">
								<a class="btn btn-link text-right ps-0 " role="button">
							  <button class=" btn btn-outline-dark fw-bold contact_form_btn" href="booking_process.php">Confirm</button></a>
							</div>							
						</div>
						
						<div class=" justify-content-end pb-3">														
							  <a class="btn btn-link  ps-0 " href="services.php" role="button">Back to services</a>
						</div>						
					</form>					
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