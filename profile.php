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
            <div id="message_alert" style="z-index: 2000; position: fixed; top: 0; right: 0; margin-right: 20px; margin-top: 20px;" class="alert alert-success">
                <?php
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                 ?>
            </div>
        <?php } ?>

		<?php
            $current_user= current_user_info();
            $profile_photo = ($current_user['user_photo'] == NULL) ? 'images/fallback-profile-photo.jpg' : 'upload/'.$current_user['user_photo'];
        ?>

		<div class="container p-0  user_profile_background_img">
			<div class="row justify-content-center ">

				<div class="col-sm-12 col-md-10 col-lg-8 p-0 ">
					
					<div class="container-fluid user_profile p-5 ">
						<h2 class="mb-5 text-center ">User Profile</h2>
						<div class=" row justify-content-center">
												
							<div class="col-xs-8 col-sm-8 col-md-6 col-lg-4 profile-photo" style="background-image: url('<?php echo $profile_photo; ?>');">
							
							</div>
							<div class="col-md-6 col-lg-8 ps-5">
								<div class="mb-4">
							    	<span class="label">User name :</span>
							    	<span class="">
							    		<?php echo $current_user['user_name'] ?>
							    	</span>
						    	
						  		</div>
							  	<div class="mb-4">
							    	<span class="label">Email Address :</span>
							    	<span>
							    		<?php echo $current_user['user_email'] ?>
							    	</span>
							  	</div>
							  	<div class="mb-4">
							    	<span class="label">Phone Number :</span>
							    	<span class="">
							    		<?php echo $current_user['user_phone'] ?>
							    	</span>
							    	
							  	</div>
							  	<div class="mb-4">
								    <span class="label">Joined Us :</span>
							    	<span class="">
							    		<?php echo date('M d, Y, h:i a', strtotime($current_user['created_date'])) ?>
							    	</span>
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

		<script>
            $(document).ready(function() {
                $('#message_alert').fadeOut(6000);
            });
        </script>

	</body>
</html>