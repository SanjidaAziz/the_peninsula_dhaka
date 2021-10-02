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

		<div class="container p-0 mt-5 pt-5 text-white">
			<div class="row justify-content-center p-5">
				<div class="col-sm-12 col-md-8 col-lg-6 ">
					
					<form action="edit_profile_process.php" method="POST" class="edit_profile">
						<h3 class="mb-3 text-center ">Edit profile</h3>
						<div class="mb-3">
					    	<label for="exampleInputEmail1" class="form-label">User name</label>
					    	<input type="text" name="username" value="<?php echo $current_user['user_name'] ?>" class="form-control" required >
					    	
					  	</div>
					  	<div class="mb-3">
					    	<label for="exampleInputEmail1" class="form-label">Email address</label>
					    	<input type="email" name="useremail" value="<?php echo $current_user['user_email'] ?>" class="form-control"required>
					    
					  	</div>
					  	<div class="mb-3">
					    	<label for="exampleInputEmail1" class="form-label">Phone number</label>
					    	<input type="tel" name="userphone" value="<?php echo $current_user['user_phone'] ?>" class="form-control" required>
					    	
					  	</div>
					  	<div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Previous Password*</label>
						    <input type="password" name="password" value="" class="form-control" required>
					  	</div>
					  	<div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">New Password</label>
						    <input type="password" name="new_password" value="" class="form-control">
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
	</body>
</html>