
<!doctype html>
<html lang="en">
	<head>
		<?php $page='login'; include 'includes/head.php'; ?>
	</head>
	<body>
		<header>
			<?php include 'includes/navbar.php'; ?>		
		</header>
	
		
		<div class="container-fluid login_backgound_img p-0">
			<!--<div ><img src="images/dine.jpg" class="d-block w-100" alt="..."></div> -->
			<div class="row justify-content-center">

				<div class="col-sm-8 col-md-6 col-lg-4  login_form ">
					
					<form action="" method="POST" class="registerForm">
						<h3 class="mb-3 text-center ">Register</h3>
						<div class="mb-3">
					    	<label for="exampleInputEmail1" class="form-label">User name</label>
					    	<input type="email" name="login_username" value="" class="form-control" id="exampleInputUserName1">
					    	
					  	</div>
					  	<div class="mb-3">
					    	<label for="exampleInputEmail1" class="form-label">Email address</label>
					    	<input type="email" name="login_useremail" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					    	<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					  	</div>
					  	<div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Password</label>
						    <input type="password" name="login_password" value="" class="form-control" id="exampleInputPassword1">
					  	</div>
					 	<div class="mb-3 form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Remember password</label>
						</div>
					  	<button type="submit" class="btn">Submit</button>
					  	<div class="my-3 message">
						    Already have an account?<a href="login.php" class="fs-5"> Login</a>
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