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
            <div id="message_alert" style="z-index: 2000; position: fixed; top: 0; right: 0; margin-right: 20px; margin-top: 20px;" class="alert alert-success">
                <?php
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                 ?>
            </div>
        <?php } ?>

		<?php $current_user= current_user_info() ?>		

		<div class="container p-0 mt-5 pt-5 text-white">
			<div class="row justify-content-center p-5">
				<div class="col-sm-12 col-md-8 col-lg-6 ">
					
					<form action="edit_profile_process.php" method="POST" class="edit_profile" enctype="multipart/form-data">
						<h3 class="mb-5 text-center ">Edit profile</h3>
						<div class="mb-3">
					    	<label for="username" class="form-label">User name</label>
					    	<input id="username" type="text" name="username" value="<?php echo $current_user['user_name'] ?>" class="form-control" required >
					    	
					  	</div>
					  	<div class="mb-3">
					    	<label for="useremail" class="form-label">Email address</label>
					    	<input id="useremail" type="email" name="useremail" value="<?php echo $current_user['user_email'] ?>" class="form-control"required>
					    
					  	</div>
					  	<div class="mb-3">
					    	<label for="userphone" class="form-label">Phone number</label>
					    	<input id="userphone" type="tel" name="userphone" value="<?php echo $current_user['user_phone'] ?>" class="form-control" required>
					    	
					  	</div><!--
					  	<div class="mb-3">
						    <label for="password" class="form-label">Previous Password*</label>
						    <input id="password" type="password" name="password" value="" class="form-control" required>
					  	</div> -->
					  	<div class="mb-3">
						    <label for="new_password" class="form-label">New Password</label>
						    <input id="new_password" type="password" name="new_password" value="" class="form-control">
					  	</div>
                        <div class="mb-3">
                            <label for="user_photo" class="form-label">Change Profile Photo</label>
                            <input id="user_photo" type="file" name="user_photo" value="" class="form-control">
                        </div>
					 	<div class="float-end">
					  		<button type="submit">Update</button>
					  	</div>
					  	<div class="my-3 py-3 ">
					  		<a class="text-white fw-bold" href="profile.php">Back to profile</a>
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
                $('#message_alert').fadeOut(6000);
            });
        </script>
	</body>
</html>