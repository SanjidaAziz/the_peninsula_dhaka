<?php
function current_user_info(){
	require_once ('db/connection.php');
	if(is_logged_in()){
		$email= $_SESSION['user_email'];
		$sqlSelect = "SELECT * FROM user where user_email='$email'";
		$result = mysqli_query($link,$sqlSelect);
		$noOfRow = mysqli_num_rows($result);
		if($noOfRow){
			$row= mysqli_fetch_assoc($result);
			//printer($row,1);
			return $row;
		}


		//echo "hiii";
		//exit();
	}
	else{
		$msg= "no user logged in";
		redirect("login.php",$msg);
	} 
} 

?>




<!doctype html>
<html lang="en">
	<head>
		<?php $page='profile'; include 'includes/head.php'; ?>
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

		<?php $current_user= current_user_info() ?>

		<div class="container p-0 py-5 ">
			<div class="row justify-content-center pt-5 ">

				<div class="col-sm-12 col-md-8 col-lg-6 pt-5">
					

					<div class="container-fluid user_profile">
						<h3 class="mb-5 text-center ">User Profile</h3>
						<div class=" row justify-content-center">
						
						
							<div class="col-4 border-dark border">
								<img src="..." class="rounded mx-auto d-block" alt="...">
							</div>
							<div class="col-8 ps-5">
								<div class="mb-3">
							    	<h5>User name : </h5>
							    	<span class="">
							    		<?php echo $current_user['user_name'] ?>
							    	</span>
						    	
						  		</div>
							  	<div class="mb-3">
							    	<h5>Email Address : </h5>
							    	<p class="">
							    		<?php echo $current_user['user_email'] ?>
							    	</p>
							  	</div>
							  	<div class="mb-3">
							    	<h5>Phone Number : </h5>
							    	<p class="">
							    		<?php echo $current_user['user_phone'] ?>
							    	</p>
							    	
							  	</div>
							  	<div class="mb-3">
								    <h5>Joined Us : </h5>
							    	<p class="">
							    		<?php echo $current_user['created_date'] ?>
							    	</p>
							  	</div>

							  	<div>
								    <a href="edit_profile.php">Edit profile</a>
							  	</div>
							</div>
						
					 	
					</div>
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